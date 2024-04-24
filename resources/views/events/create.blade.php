<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body >

    <div >
        <h1 class="text-orange-500 text-5xl font-semibold mb-10">Crie o seu evento</h1>
        <form action="/events" method="POST">
            @csrf
            <div>
                <label class="text-orange-400 font-semibold text-xl" for="title">Evento: </label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div>
                <label class="text-orange-400 font-semibold text-xl" for="title">Cidade: </label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div>
            <div>
                <label class="text-orange-400 font-semibold text-xl" for="title">O evento é privado? </label>
                <select name="private" id="private" class="form-control" >
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div>
                <label class="text-orange-400 font-semibold text-xl" for="title">Descrição: </label> <br>
                <textarea name="description" id="description" placeholder="Descreva o evento"></textarea>
            </div>
            <input type="submit" value="Criar Evento">

        </form>
    </div>
    
</body>
</html>