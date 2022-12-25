@extends('layout')

@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection


@section('content')
    <div class="divMain">
        <div class="products">
            @foreach ($productos as $producto)
            <article>
                <a>
                    <img src="{{ $producto->img }}" alt="">
                </a>
                <span class="nombreProduct propProduct">{{ $producto->name }}</span>
                <span class="precioProduct propProduct">{{ $producto->precio }}€</span>
            </article>
        @endforeach
        </div>
        <button class="btnFilter">
            <i class="fa-solid fa-filter"></i>
        </button>
    </div>
    @include('filtros')
@endsection

@section('js')
    <script src="js/home.js"></script>
@endsection
