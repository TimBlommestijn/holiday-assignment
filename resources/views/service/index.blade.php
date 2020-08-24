@extends('app')

@section('title', 'services')

@section('content')
    <h1>Welcome to Laravel 6 from Services</h1>

    <form action="/services" method="POST">
    @csrf
        <input type="text" name="name">
        <button type="submit">add service</button>
    </form>
    <p style="color: red ">@error('name') {{ $message }} @enderror</p>
    <ul>
        @forelse($services as $service)
            <li>{{$service->name}}</li>
        @empty
            <li>no services available</li>
        @endforelse
    </ul>
@endsection