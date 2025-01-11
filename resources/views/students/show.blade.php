@extends('dashboard')
@section('content')


<div class="card">
  <div class="card-header">Students Review</div>
  <div class="card-body">


        <div class="card-body">
        <p class="card-title">Fname : {{ $students->Fname }}</p>
        <p class="card-text">Lname : {{ $students->Lname }}</p>
        <p class="card-text">Username: {{ $students->User }}</p>
        <p class="card-text">Email : {{ $students->Email }}</p>
        <p class="card-text">Department and Year : {{ $students->Department }}</p>
        <p class="card-text">Year : {{ $students->Year }}</p>

  </div>

    </hr>

  </div>
</div>
