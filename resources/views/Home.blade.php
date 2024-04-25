<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Laravel</title>
        
    </head>
    <!-- bg-gradient-to-b from-orange-500 to-slate-900 -->

    <body class="bg-gradient-to-b to-slate-900 from-orange-600 container mx-auto px-20 flex flex-col items-center md:pt-16 pt-24 h-screen md:gap-8">


        <img class="z-10 mt-2 md:mt-0" src="{{ Vite::asset('public/img/ilustracao1.png') }}">

        <div class="z-10 flex flex-col items-center">
            <h1 class="text-white text-center text-2xl md:text-3xl font-semibold  my-10">Descomplicando o seu dia com uma tarefa de cada vez! :)</h1>
            <a href="/" class="text-white text-center w-52 h-14 rounded-full text-xl bg-orange-600 font-bold items-center flex justify-center">Começar</a>
        </div>

        <footer class="md:mt-5 mt-5 absolute bottom-3">
            <p class=" md:text-base text-white text-center">ToDo List</p>
            <p class="text-center text-xs md:text-xs text-slate-500">2024 © Todos os direitos reservados - Yasmim Barros</p>
        </footer>
        

    </body>
</html>