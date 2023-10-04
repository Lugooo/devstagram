@extends('layouts.app')

@section('titulo')
    Inicia Sesión en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-8 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/register.png') }}" alt="Imagen login de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-5 rounded-md shadow">
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf

                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-1 rounded-md text-sm p-2 text-center">
                        {{ session('mensaje') }}
                    </p>
                @endif
                <div class="mb-5">
                    <label for="username" class="mb-1 block uppercase text-gray-500 font-bold">Username</label>
                    <input type="text" id="username" name="username" placeholder="Tu nombre de usuario"
                        class="outline-none border p-2 w-full rounded-md @error('username') border-red-500 @enderror"
                        value="{{ old('username') }}">
                    @error('username')
                        <p class="bg-red-500 text-white my-1 rounded-md text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-1 block uppercase text-gray-500 font-bold">Password</label>
                    <input type="password" id="password" name="password" placeholder="Tu contraseña"
                        class="outline-none border p-2 w-full rounded-md @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="bg-red-500 text-white my-1 rounded-md text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5 flex gap-1 items-center">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember" class="text-sm text-gray-500">Recordarme</label>
                </div>

                <input type="submit" value="Iniciar Sesión"
                    class="text-white bg-sky-600 hover:bg-sky-700  transition-colors cursor-pointer uppercase font-bold w-full p-3 rounded-md">



            </form>
        </div>
    </div>
@endsection
