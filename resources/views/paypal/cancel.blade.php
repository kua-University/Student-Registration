<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Canceled</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS file -->
</head>
<body>
    <div class="container">
        <h1>Payment Canceled</h1>
        <p>Your payment has been canceled. If you have any questions, please contact support.</p>
        <p>You can try again by going back to the payment page.</p>
        <a href="{{ url('/students') }}" class="btn btn-warning">Return to Student Registration</a>
    </div>
</body>
</html>
