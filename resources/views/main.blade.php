@extends('layout')

@section('content')
    <header>
        <div>
            <i class="fa-solid fa-magnifying-glass"></i>
            <span>{{ Session::get('email') }}</span>
        </div>
        <ul>
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