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
        <h1 class="text-orange-400 text-5xl mb-14 text-center">{{$event->title}}</h1>
        <form action="/events/update/{{$event->id}}" method="POST" class="flex flex-col gap-4 px-5">
            @csrf
            @method('PUT')
            <div class="flex flex-col gap-2">
                <label class="text-orange-400 font-semibold text-lg md:text-xl" for="title">Tarefa: </label>
                <input type="text" class="bg-slate-300 h-14 pl-7 rounded-2xl" id="title" name="title" placeholder="Nome do evento" value ="{{$event ->title}}" maxlength="23">
            </div>

            <div class="flex flex-col md:flex-row my-10 md:items-center">
                <div class="flex flex-row mb-5 md:mb-0 items-center md:mr-10">
                    <label class="text-orange-400 font-semibold md:text-xl md:mr-6" for="title">Concluir até: </label>
                    <input type="date" class="bg-slate-300 md:h-14 h-10 px-7 ml-5 rounded-xl md:rounded-2xl md:w-48" id="city" name="city" value ="{{$event ->city}}"/>
                </div>
                <div class="flex flex-row items-center mr-10">
                    <label class="text-orange-400 font-semibold text-lg md:text-xl mr-6" for="title">Nível de prioridade: </label>
                    <select name="private" id="private" class="px-7 bg-slate-300 md:h-14 h-10 md:w-44 rounded-xl md:rounded-2xl" >
                        <option value="0">Alta</option>
                        <option value="1">Baixa</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-orange-400 font-semibold text-lg md:text-xl" for="title">Descrição: </label>
                <textarea name="description" id="description" class="bg-slate-200 pl-7 pt-4 h-20 mt-0 rounded-2xl" placeholder="Descreva a tarefa" value ="{{$event->description}}" required></textarea>
            </div>
            <input class="mt-5 bg-orange-500 text-white font-semibold rounded-2xl text-lg md:text-xl p-4 items-center text-center" type="submit" value="Salvar">
            <a href="/" class=" bg-slate-900 text-white font-semibold rounded-2xl text-lg md:text-xl p-4 items-center text-center">Voltar</a>

        </form>
    </div>
    
</body>
</html>