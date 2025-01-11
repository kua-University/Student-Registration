<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\Log; // Import the Log facade

class PaypalController extends Controller
{
    public function paypal(Request $request)
    {
        // Create a new instance of the PayPal client
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        // Create the order
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal.success'), // URL to redirect after payment
                "cancel_url" => route("paypal.cancel")   // URL to redirect if payment is canceled
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $request->price // Ensure this is passed correctly
                    ]
                ]
            ]
        ]);

        // Log the order creation attempt
        Log::info('PayPal Order Creation Attempt', [
            'response' => $response,
            'request_price' => $request->price,
            'request_product_name' => $request->product_name,
            'request_quantity' => $request->quantity,
        ]);

        // Check if the response is successful
        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] == 'approve') {
                    // Store product details in session
                    session()->put('product_name', $request->product_name);
                    session()->put('quantity', $request->quantity);
                    // Redirect to PayPal for approval
                    return redirect()->away($link['href']);
                }
            }
        } else {
            // Log the failure to create the order
            Log::error('Failed to create PayPal order', ['response' => $response]);
            // Redirect to cancel route if order creation failed
            return redirect()->route('cancel')->with('error', 'Failed to create PayPal order.');
        }
    }

    public function success(Request $request)
    {
        // Check if paymentId and PayerID are present in the request
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $provider->getAccessToken();

            // Capture the payment
            $response = $provider->capturePaymentOrder($request->input('paymentId'));

            // Log the payment capture attempt
            Log::info('PayPal Payment Capture Attempt', [
                'paymentId' => $request->input('paymentId'),
                'response' => $response,
            ]);

            // Check if the response is successful
            if ($response['status'] === 'COMPLETED') {
                // Payment was successful
                // You can save the transaction details to the database or perform other actions
                return redirect()->route('paypal.success')->with('success', 'Payment successful!');
            } else {
                // Log the payment failure
                Log::error('Payment capture failed', ['response' => $response]);
                // Handle payment failure
                return redirect()->route('paypal.error')->with('error', 'Payment failed: ' . $response['message']);
            }
        }

        // Redirect to error if paymentId or PayerID is missing
        return redirect()->route('paypal.error')->with('error', 'Invalid payment data.');
    }

    public function cancel()
    {
        // Handle the cancellation logic here
        return redirect()->route('paypal.cancel')->with('error', 'Payment was canceled.');
    }

    public function error()
    {
        return view('paypal.error')->with('error', session('error'));
    }
}
