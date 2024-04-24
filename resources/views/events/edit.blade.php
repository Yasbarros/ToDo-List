<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="container mx-auto my-10 bg-slate-800">

    <div >
        <h1 class="text-orange-500 text-5xl font-semibold mb-10">Edição: {{$event->title}}</h1>
        <form action="/events/update/{{$event->id}}" method="POST" class="grid gap-4">
            @csrf
            @method('PUT')
            <div class="flex flex-col gap-2">
                <label class="text-orange-400 font-semibold text-xl" for="title">Evento: </label>
                <input type="text" class="bg-slate-300 h-14 pl-7 rounded-2xl" id="title" name="title" placeholder="Nome do evento" value ="{{$event ->title}}">
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-orange-400 font-semibold text-xl " for="title">Cidade: </label>
                <input type="text" class="bg-slate-300 h-14 pl-7 rounded-2xl" id="city" name="city" placeholder="Local do evento" value ="{{$event ->city}}">
            </div>
            <div class="my-5">
                <label class="text-orange-400 font-semibold text-xl mr-6" for="title">O evento é privado? </label>
                <select name="private" id="private" class="pl-5 bg-slate-300 h-10 w-44 rounded-2xl" >
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-orange-400 font-semibold text-xl" for="title">Descrição: </label>
                <textarea name="description" id="description" class="bg-slate-200 pl-7 pt-4 h-20 mt-0 rounded-2xl" placeholder="Descreva o evento" value ="{{$event ->description}}"></textarea>
            </div>
            <input class="mt-5 bg-orange-400 text-white font-semibold rounded-2xl text-xl p-4 items-center text-center" type="submit" value="Editar">

        </form>
    </div>
    
</body>
</html>