@extends('layout')

@section('css')
    <link rel="stylesheet" href="css/login.css">
@endsection

@section('content')
    <div class="container">
        <div>
            <h3 class="titleForm">Recover password</h3>
            <form action="/recover" method="POST" class="form">
                @csrf
                <span>Enter your email registered with your account</span>
                <input type="email" name="email" id="">
                <button class="btnGeneral" type="submit">Apply</button>
                @if ($errors->any())
                    <p style="color: red">{{ $errors->first() }}</p>
                @endif
            </form>
            <a href="/">Login</a>
        </div>
    </div>
@endsection
