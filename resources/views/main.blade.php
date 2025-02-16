@extends('layouts.main_layout')

@section('content')
    <h1 class="text-4xl font-bold text-indigo-400 mb-4 drop-shadow-lg">
        Welcome to Blade
    </h1>
    <p class="text-xl text-gray-300">Bem-vindo ao Blade!</p>
    <hr class="my-4 border-gray-500">

    <h3 class="text-2xl font-semibold text-blue-300">
        O valor é: <span class="font-bold text-white">{{ $value }}</span>
    </h3>
@endsection
