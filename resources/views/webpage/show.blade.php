@extends('layouts.webpage')

@section('pagina')

    <div class="main-content">
        <div class="main-container">
            <div class="w-row">
                <div class="column w-col w-col-8 w-col-stack">
                    <div class="single-post-body">

         <div class="single-blog-inner">
        <h2 class="signle-post-title">{{ $titulo ?  $titulo : 'NO hayh titulo' }}</h2>

        @if ($imagen)
            <img src="{{ asset('storage/' . $imagen) }}" class="single-post-lower-image" alt="{{ $titulo }}">
        @endif

        <p class="single-post-paragraph">
            <strong>Categoría:</strong> {{ $categoria }}
        </p>
        <p class="single-post-paragraph">
            <strong>Publicado:</strong> {{ $fecha }}
        </p>

        <a href="{{ route('web-page.principal') }}" class="btn btn-secondary mt-3">Regresar</a>
       </div>
    </div>


@endsection
