@extends('layouts.header')
@section('title') CRUD-read @endsection

@section('body')
    <main class="container d-flex justify-content-around my-5">
        <div class="col-8 p-5 shadow-sm mt-2 bg-light rounded"> 
     <h2>Read data page</h2>
        {{-- PHP system : --}}
        <?php
        // if($fullname === "oussama"){
            
            // echo "<h1>$fullname is an admin</h1>";
            // }else {
                // echo "<h1>$fullname is a user</h1>"; 
                // }
                ?> 

    {{-- Blad system : --}}
    <div class="card">
        <div class="card-header">

            <h4 class="card-title">Fullname : {{$fullname}}</h4>
        </div>
        <div class="card-body">
            <p class="card-text">Email : {{$email}}</p>
            <p class="card-text">Age : {{$age}}</p>
        </div>
        <div class="card-footer">
            <p class="card-text">Type : @if($fullname == "oussama")
                admin
                @else
                user 
                @endif
                
                </p>

        </div>
    </div>
    </div>
</main>
@endsection