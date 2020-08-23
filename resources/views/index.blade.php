@extends('layout.app')
@section('content')
<div class="content">
    <div class="container rounded containertje text-center mt-3 p-5">
        <h1>welkom op onze website</h1>
        <h3>welkom op onze nieuwe laravel site. deze site gebruikt laravel version 6</h3>
    </div>
    <div class="container mt-3">
        <div class="row justify-content-between">
            <div class="col-lg-9">
                <h1 class="text-center">Home</h1>
                <h3>Contacts:</h3>
                @foreach($contacts as $contact)
                    <div class="w3-card-4" style="width:40%">
                        <header class="w3-container w3-light-grey">
                            <h3>{{ $contact->naam }}</h3>
                        </header>
                        <div class="w3-container">
                            <p>{{ $contact->email }}</p>
                            <hr>
                        <p>{{ $contact->bericht }}</p><br>
                        </div>
                       <div class="d-flex justify-content-center">
                       <a href="/update/contact/{{$contact->contactid}}"><button class="w3-button w3-yellow m-2">update</button></a>
                        <form action="/delete/contact/{{$contact->contactid}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="w3-button w3-red m-2">Delete</button>
                    </form>   
                    </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-2 containertje">
                <h3>sidebar</h3>
                <p>dit is de sidebar</p>
            </div>
        </div>
    </div>
</div>
    <style>
        .containertje{
            background-color: gray;
            border-radius: 5px;
        }
    </style>
@endsection
