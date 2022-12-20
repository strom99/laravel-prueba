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
                <input type="text" placeholder="Name" name="name" value="{{ old('name') }}">
                @error('name')
                    <p style="color: red">{{ $message }}</p>
                @enderror  
                <input type="number" placeholder="Phone number" name="phone" value="{{ old('phone') }}">
                @error('phone')
                    <p style="color: red">{{ $message }}</p>
                @enderror  
                <input type="text" placeholder="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <p style="color: red">{{ $message }}</p>
                @enderror  
                <input type="text" placeholder="password" name="password" value="{{ old('password') }}">
                @error('password')
                    <p style="color: red">{{ $message }}</p>
                @enderror  
                <button class="btnGeneral" type="submit">Register</button>             
            </form>
            <a href="/">Login</a>
        </div>
    </div>
@endsection
