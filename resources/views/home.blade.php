@extends('layouts.app')

@section('titulo')
    Página Principal
@endsection


@section('contenido')

    <x-lista-post :posts="$posts" />


    {{--     @forelse ($posts as $post)
        <h4>{{ $post->titulo }}</h4>
    @empty
        <p>No hay Post</p>
    @endforelse --}}
@endsection
