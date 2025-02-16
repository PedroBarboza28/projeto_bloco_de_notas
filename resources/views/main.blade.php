<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Adicionando o Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-500 to-indigo-600 min-h-screen flex items-center justify-center">

    <!-- Conteúdo centralizado -->
    <div class="text-center text-white p-10 bg-opacity-75 bg-black rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold mb-4">Welcome to Blade</h1>
        <p class="text-xl">Bem vindo ao Blade!</p>
        <hr>
        <h3>O valor é: {{ $value }}</h3>
    </div>

</body>
</html>
