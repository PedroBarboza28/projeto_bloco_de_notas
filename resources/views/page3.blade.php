@extends('layouts.main_layout')

@section('content')

<h1 class="text-4xl font-bold mb-4">Welcome to Blade</h1>
<p class="text-xl">Bem vindo ao Blade!</p>
<hr>
<h3>Page 3</h3>
<hr>
<h3>O valor é: {{ $value }}</h3>

@endsection
