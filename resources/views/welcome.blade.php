<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Laravel</title>
        
    </head>
    <body class="my-10 bg-slate-800 min-h-screen">
        <div class="container mx-auto px-5 flex-1">

                <div class="mb-10">
                    <a href="/"><h1 class=" text-orange-500 text-6xl font-semibold">ToDo List</h1></a>
                
                    <div class="md:my-8 my-10">
                        <form action="" class="flex flex-row bg-slate-900 rounded-xl items-center">
                            <label for="search" class="pl-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.0" stroke="white" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </label>

                            <input type="text" id="search" name="search" class="w-full h-10 mx-3  outline-none bg-slate-900 text-white" autocomplete="off" placeholder="Procurar tarefa">
                        </form>
                    </div>

                </div>

                @if($search)
                <h2 class="text-2xl text-orange-400 mb-2">Buscando por: {{$search}}</h2>
                @endif
                
                @if($search)
                    @if ($count == 1)                      
                        <p class="text-base text-orange-300 mb-5">{{ $count }} Tarefa encontrada.</p>
                    @elseif ($count > 1)
                        <p class="text-base text-orange-300 mb-5">{{ $count }} Tarefas encontradas.</p>
                    @else
                        <p class="text-base text-orange-300 mb-5">Nenhuma tarefa encontrada.</p>
                    @endif
                @endif


                @foreach($events as $event)
                    <div class="h-36 rounded-3xl bg-slate-900 mb-5 text-slate-200">
                            <div class="md:ml-10 py-4 md:pt-0 ml-5 flex flex-row items-center justify-between mr-4 md:mr-10">
                                <div class="">
                                    <div class="flex flex-row items-center text-center">
                                        <p class="font-semibold text-base text-start md:text-2xl mr-3 md:mr-5">
                                            {{@$event->title}} 
                                            
                                        </p>
                                        

                                        @if(@$event->private)
                                            <p class="bg-blue-600 rounded-full w-12 h-2 md:w-16 md:h-3"></p>
                                        @else
                                            <p class="bg-red-600 rounded-full w-12 h-2 md:w-16 md:h-3"></p>
                                        @endif
                                    </div>
                                
                                    
                                    <p class="text-slate-400 text-sm md:text-base mt-4">
                                        {{@$event->description}}
                                    </p>
                                    <div class="md:text-sm text-xs mt-5 font-bold text-orange-400 flex flex-row items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="orange" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                        </svg>
        
                                        <p>{{@$event->city}}</p>
                                        
                                    </div>
                                </div>
                                
                                <div class="md:mt-6 flex flex-col gap-5">
                                    <div class="">
                                        <a class="md:w-11 md:h-11 w-10 h-10 bg-slate-950 rounded-full flex items-center justify-center" href="/events/edit/{{$event->id}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="orange" class="md:w-6 md:h-6 w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                        </a>
                                    </div>
                                    

                                    <form action="/events/{{$event->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="md:w-11 md:h-11 w-10 h-10 bg-slate-950 rounded-full flex items-center justify-center " type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="orange" class="md:w-6 md:h-6 w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                                
                            </div>
                    </div>
                            
                @endforeach

                

                <br>
                
                
        </div>
        

        <div class="flex flex-col mt-10 md:mt-14">
            <footer class=" bg-slate-950 text-white py-8 fixed bottom-0 w-full">
                <div class="relative flex justify-center items-center justify-items-center">
                    <a class="absolute bottom-1 bg-orange-500 rounded-full p-4 items-center text-center" href="/events/create">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                        </svg>
                    </a>
                </div>
                <div class="container mx-auto text-center mt-4">
                    
                    <p class="md:text-lg">ToDo List</p>
                    <p class="text-xs mb-[-20px] md:text-base text-slate-500">2024 © Todos os direitos reservados - Yasmim Barros</p>
                </div>
            </footer>
        </div>
        
        
           
    </body>
</html>
