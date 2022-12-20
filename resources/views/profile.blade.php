@extends('layout')

@section('css')
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/home.css">
@endsection


@section('content')
    <div class="content">
        <div class="profile-side">
            <h1>{{ auth()->user()->name }}</h1>
            <div>
                <img src="https://www.somosxbox.com/wp-content/uploads/2017/06/Avatar2017-XboxOne3.jpg" alt="">
            </div>
        </div>
        <div class="details-profile">
            <h3>About me</h3>
            <div class="section">
                <span>Name</span>
                <span>{{ auth()->user()->name }}</span>
            </div>
            <div class="section">
                <span>Phone</span>
                <span>{{ auth()->user()->phone }}</span>
            </div>
            <div class="section">
                <span>Email</span>
                <span>{{ auth()->user()->email }}</span>
            </div>
            <a href="logout" class="btn">Logout</a>
        </div>
    </div>
@endsection