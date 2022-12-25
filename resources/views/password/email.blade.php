@extends('layout')

@section('css')
    <link rel="stylesheet" href="css/login.css">
@endsection

@section('content')
    <div class="container">
        <div>
            <h3 class="titleForm">Recover password</h3>
            <form action="/forgot-password" method="POST" class="form">
                @csrf
                <span>Enter your email registered with your account</span>
                <input type="email" name="email" id="" value="{{ old('email') }}">
                <button class="btnGeneral" type="submit">Apply</button>
            </form>
            @if (Session::has('status'))
                <p style="color: green">{{ Session::get('status') }}</p>
            @endif
            @error('email')
                <p style="color: red">{{ $message }}</p>
            @enderror 
            <a href="/">Login</a>
        </div>
    </div>
@endsection
