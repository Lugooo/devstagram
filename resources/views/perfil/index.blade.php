@extends('layouts.app')

@section('titulo')
    Editar Perfil: {{ auth()->user()->username }}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w:1/2 bg-white shadow p-5">
            <form method="POST" action="{{ route("perfil.store") }}" enctype="multipart/form-data" class="mt-10 md:mt-0">
                @csrf
                <div class="mb-5">
                    <label for="username" class="mb-1 block uppercase text-gray-500 font-bold">Username</label>
                    <input type="text" id="username" name="username" placeholder="Tu nombre de usuario"
                        class="border p-2 w-full rounded-md @error('username') border-red-500 @enderror"
                        value="{{ auth()->user()->username }}">
                    @error('username')
                        <p class="bg-red-500 text-white my-1 rounded-md text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="imagen" class="mb-1 block uppercase text-gray-500 font-bold">Imagen Perfil</label>
                    <input type="file" id="imagen" name="imagen" class="border p-2 w-full rounded-md" value=""
                        accept=".jpg, .jpeg, .png" />
                </div>

                <input type="submit" value="Guardar"
                    class="text-white bg-sky-600 hover:bg-sky-700  transition-colors cursor-pointer uppercase font-bold w-full p-3 rounded-md" />
            </form>
        </div>
    </div>
@endsection
