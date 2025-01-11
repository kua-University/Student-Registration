<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
   <!-- <a href="{{ url('/students') }}">Registration</a>-->
            <!-- This is where child views will insert their content -->


            <!--NEWLY ADDED CONTENT INCLUDING THE CSS-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Student Registration</title>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Student Registration System</title>
    <style>
        body {
            background-color: #f0f8ff; /* Light background color */
            font-family: Arial, sans-serif;
        }
        .sidebar {
            margin: 0 auto; /* Center the sidebar */
            padding: 0;
            width: 300px; /* Increased width for better visibility */
            background-color: #f1f1f1; /* Sidebar background color */
            height: auto; /* Allow height to adjust based on content */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow for depth */
            text-align: center; /* Center text in sidebar */
            padding: 20px; /* Padding for spacing */
        }
        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
            font-size: 1.5em; /* Increased font size */
            margin: 10px 0; /* Spacing between links */
            border-radius: 5px; /* Rounded corners for links */
            transition: background-color 0.3s; /* Smooth background transition */
        }
        .sidebar a.active {
            background-color: #04AA6D; /* Active link color */
            color: white;
        }
        .sidebar a:hover:not(.active) {
            background-color: #555; /* Hover color */
            color: white;
        }
        .content {
            margin: 20px auto; /* Center content */
            padding: 20px;
            max-width: 800px; /* Limit content width */
        }
        .welcomepage {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .welcome-title {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #04AA6D;
        }
        .welcome-message {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #333;
        }
        .get-started-btn {
            background-color: #04AA6D;
            color: white;
            padding: 15px 30px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .get-started-btn:hover {
            background-color: #007bff;
        }
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%; /* Full width on small screens */
                height: auto;
                position: relative;
            }
            .content {
                margin-left: 0; /* No margin on small screens */
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><h2>Student Registration System</h2></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
        </div>
    </div>

        <div class="col-md-3">
            <div class="sidebar">
                <a href="{{ url('/students') }}" class="active">Student  Profile</a>
                <a href="{{ url('/courses') }}">Courses</a>
            </div>
        </div>













{{-- <div class="payment_integration">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student registration</title>
</head>
<body>
    <h2>Product:Laptop</h2>
    <h3>Price:$100</h3>
    <form action="{{route('paypal')}}" method="post">
        @csrf
        <input type="hidden" name="price" value="100">
        <input type="hidden" name="product_name" value="Laptop">
        <input type="hidden" name="quantity" value="1">
        <button type="submit">pay with paypal</button>
</div> --}}




   <!-- <div class="row justify-content-center">

        <div class="col-md-9 content">
            <div class="welcomepage">-->


          <!-- <div class="welcomepage">
                <h1 class="welcome-title">Welcome to the Student Registration System!</h1>
                <p class="welcome-message">Your journey to academic excellence starts here. Register now to unlock your potential and explore various courses tailored for you.</p>
                <button class="get-started-btn" onclick="location.href='{{ url('/students/create') }}'">Get Started</button>
            </div>-->
            @yield('content')
            <div style="height: 150px;"></div> <!-- Spacer div -->


</x-app-layout>
