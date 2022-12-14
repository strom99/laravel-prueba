@extends('layout')
@section('content')
    <h3>Login</h3>
    <form action="/login" method="POST">
        @csrf
        <input type="text" placeholder="email" name="email">
        <input type="text" placeholder="password" name="password">
        <button type="submit">Login</button>
        @if ($errors->any())
            <p style="color: red">{{ $errors->first() }}</p>
        @endif
    </form>
    <a href="href=/forgot/">Forgot password</a>
    <a href="href=/signup/">Register</a>
@endsection