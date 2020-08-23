@extends('layout.app')
@section('content')
<div class="content">
    <div class="container mt-3">
        <div class="row justify-content-between">
            <div class="col-lg-9">
                <h2>Home</h2>
                <form method="POST" action="/contact">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">naam</label>
                        <input type="text" name="naam" class="form-control" id="exampleFormControlInput1" placeholder="uw naam">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">bericht</label>
                        <textarea name="bericht" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-light">verzend</button>
                </form>
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
