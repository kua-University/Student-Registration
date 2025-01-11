<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Error</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8d7da; /* Light red background for error */
            color: #721c24; /* Dark red text color */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #721c24; /* Dark red color for error */
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            color: #fff;
            background-color: #dc3545; /* Bootstrap danger color */
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #c82333; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Error</h1>
        <p>Unfortunately, there was an error processing your payment.</p>
        <p>Please check your payment details and try again.</p>
        <p>If the problem persists, please contact support.</p>
        <a href="{{ url('/students') }}" class="btn">Return to Student Registration</a>
    </div>
</body>
</html>
