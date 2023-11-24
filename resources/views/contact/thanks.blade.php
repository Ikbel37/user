



@extends('layout')
@section('content')
  
<div class="container">
     @if (auth()->check())
     <h1 class="text-center text-success pt-4">
        Welcome, {{ auth()->user()->name }}
     </h1>
     <hr>
    @else
        <p>You are not logged in</p>
    @endif

    <div class="card">  
        <div class="align-self-end ml-auto">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
        </svg>
        <a href="{{ route('logout') }}">Log-Out</a> </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"> 
        </script> 
        <script src= 
    "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> 
        </script> 
       
        <div class="card-body"> 
           <h2> Thanks You !!!!!!! </h2>
        </div>
     
    </div>

@stop