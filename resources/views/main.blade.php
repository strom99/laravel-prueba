@extends('layout')

@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection


@section('content')
    <header>
        <div>
            <div>
                <label for="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label>
                <input id="searchInput" type="text" placeholder="Search any argument">
            </div>
            <span>{{ Session::get('email') }}</span>
        </div>
        <ul class="menu">
            <li>Home</li>
            <li>Collection</li>
        </ul>
    </header>
    <div class="products">
        @foreach ($productos as $producto)
            <article>
                <h3>{{ $producto->name}}</h3>
                <img src="{{ $producto->img}}" alt="">
                <div class="card">
                    <span>{{ $producto->precio }} $</span>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </article>
        @endforeach
    </div>
@endsection