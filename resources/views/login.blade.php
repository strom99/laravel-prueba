@extends('layout')

@section('css')
    <link rel="stylesheet" href="css/login.css">
@endsection


@section('content')
    <div class="container">
        <div>
            <h3 class="titleForm">Login</h3>
            <form action="/login" method="POST" class="formLogin">
                @csrf
                <input type="text" placeholder="email" name="email">
                <input type="text" placeholder="password" name="password">
                <button class="btnGeneral" type="submit">Login</button>
                @if ($errors->any())
                    <p style="color: red">{{ $errors->first() }}</p>
                @endif
            </form>
            <a href="href=/forgot/">Forgot password</a>
            <a href="href=/signup/">Register</a>
        </div>
    </div>
@endsection