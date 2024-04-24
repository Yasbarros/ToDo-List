<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Laravel</title>
        
    </head>
    <body class="container mx-auto my-10 bg-slate-800">
        <div class="mb-10">
            <h1 class=" text-orange-500 text-6xl font-bold">To do List</h1>

            <!-- <div>
                <form action="">
                    <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
                </form>
            </div> -->

        </div>
        

        
       
        @foreach($events as $event)
            <div class="h-36 rounded-3xl bg-slate-900 mb-5 text-white">
                    <div class="ml-10 flex flex-row items-center justify-between mr-10">
                        <div class="">
                            <div class="flex flex-row items-center text-center">
                                <p class="font-semibold text-xl mr-10">
                                    {{@$event->title}} 
                                </p>

                                @if(@$event->private)
                                    <p class="bg-red-600 rounded-full w-16 h-3"></p>
                                @else
                                    <p class="bg-blue-600 rounded-full w-16 h-3"></p>
                                @endif
                            </div>
                            
                            <p class="text-slate-200 mt-4">
                                {{@$event->description}}
                            </p>
                        </div>
                        
                        <div class="flex flex-col gap-5 mt-5">
                            <div class="">
                                <a class="w-11 h-11 bg-slate-950 rounded-full flex items-center justify-center  " href="/events/edit/{{$event->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </a>
                            </div>
                            

                            <form action="/events/{{$event->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="w-11 h-11 bg-slate-950 rounded-full flex items-center justify-center " type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                        
                    </div>
            </div>
                       
        @endforeach

        <br>
           
        <div class="flex justify-center items-center justify-items-center">
            <a class="bg-orange-500 rounded-full p-4 items-center text-center" href="/events/create">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                </svg>
            </a>
        </div>
        
           
    </body>
</html>
