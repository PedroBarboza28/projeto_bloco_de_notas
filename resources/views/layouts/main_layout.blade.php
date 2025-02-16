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
<body class="bg-gradient-to-r from-blue-500 to-indigo-600 min-h-screen flex items-center justify-center p-6">

    <!-- Conteúdo centralizado -->
    <div class="text-center text-white p-10 bg-opacity-75 bg-black rounded-lg shadow-lg w-full max-w-2xl">
        <p class="text-gray-300 font-semibold">Text from the layout (TOP)</p>
        <hr class="border-gray-500 my-4">

        @yield('content')

        <hr class="border-gray-500 my-4">
        <p class="text-gray-300 font-semibold">Text from the layout (BOTTOM)</p>
    </div>

</body>
</html>
