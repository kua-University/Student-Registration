<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Light background color */
            color: #333; /* Dark text color */
            text-align: center; /* Centered text */
            padding: 50px; /* Padding around the content */
        }
        h1 {
            color: #28a745; /* Bootstrap success color */
        }
        p {
            font-size: 18px; /* Font size for paragraphs */
        }
        .container {
            max-width: 600px; /* Maximum width for the container */
            margin: 0 auto; /* Center the container */
            background-color: #fff; /* White background for the container */
            padding: 20px; /* Padding inside the container */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        .btn {
            display: inline-block; /* Inline block for button */
            padding: 10px 20px; /* Padding for button */
            background-color: #007bff; /* Bootstrap primary color */
            color: white; /* White text color */
            text-decoration: none; /* Remove underline */
            border-radius: 5px; /* Rounded corners for button */
            margin-top: 20px; /* Margin above the button */
        }
        .btn:hover {
            background-color: #0056b3; /* Darker shade for hover effect */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Successful!</h1>
        <p>Your payment has been completed successfully.</p>

        <p>Thank you for your payment!</p>
        <a href="{{ url('/') }}" class="btn">Return to Home</a>
    </div>
</body>
</html>
