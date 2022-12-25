@extends('layout')

@section('css')
    <link rel="stylesheet" href="css/login.css">
@endsection

@section('content')
    <div class="container">
        <div>
            <h3 class="titleForm">Reset password</h3>
            <form action="/reset-password" method="POST" class="form">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="email" name="email" id="" value="{{ old('email') }}">
                @error('email')
                    <p style="color: red">{{ $message }}</p>
                @enderror 
                <input type="password" name="password" id="" value="{{ old('password') }}" placeholder="password">
                @error('password')
                    <p style="color: red">{{ $message }}</p>
                @enderror 
                <input type="password" name="password_confirmation" id="" value="{{ old('password_confirmation') }}" placeholder="confirm password">
                <button class="btnGeneral" type="submit">Apply</button>
            </form>
            <a href="/">Login</a>
        </div>
    </div>
@endsection
