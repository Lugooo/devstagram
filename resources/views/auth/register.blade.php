@extends('layouts.app')

@section('titulo')
    Crear Cuenta
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-8 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/register.png') }}" alt="Imagen registro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-5 rounded-md shadow">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-1 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Tu nombre"
                        class="border p-2 w-full rounded-md @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="bg-red-500 text-white my-1 rounded-md text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-1 block uppercase text-gray-500 font-bold">Username</label>
                    <input type="text" id="username" name="username" placeholder="Tu nombre de usuario"
                        class="border p-2 w-full rounded-md @error('username') border-red-500 @enderror"
                        value="{{ old('username') }}">
                    @error('username')
                        <p class="bg-red-500 text-white my-1 rounded-md text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-1 block uppercase text-gray-500 font-bold">Email</label>
                    <input type="text" id="email" name="email" placeholder="Tu email"
                        class="border p-2 w-full rounded-md @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="bg-red-500 text-white my-1 rounded-md text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-1 block uppercase text-gray-500 font-bold">Password</label>
                    <input type="password" id="password" name="password" placeholder="Tu contraseña"
                        class="border p-2 w-full rounded-md @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="bg-red-500 text-white my-1 rounded-md text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir
                        Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="Repite contraseña" class="border p-3 w-full rounded-md">
                </div>

                <input type="submit" value="Crear Cuenta"
                    class="text-white bg-sky-600 hover:bg-sky-700  transition-colors cursor-pointer uppercase font-bold w-full p-3 rounded-md">

            </form>
        </div>
    </div>
@endsection
