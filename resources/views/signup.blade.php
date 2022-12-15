@extends('layout')

@section('css')
    <link rel="stylesheet" href="css/login.css">
@endsection
@section('content')
    <div class="container">
        <div>
            <h3 class="titleForm">Register Account</h3>
            <form action="/register" method="POST" class="form">
                @csrf
                <input type="text" placeholder="Name" name="name">
                <input type="number" placeholder="Phone number" name="phone">
                <input type="text" placeholder="email" name="email">
                <input type="text" placeholder="password" name="password">
                <button class="btnGeneral" type="submit">Login</button>
                @if ($errors->any())
                    <p style="color: red">{{ $errors->first() }}</p>
                @endif
            </form>
            <a href="href=login">Login</a>
        </div>
    </div>
@endsection
