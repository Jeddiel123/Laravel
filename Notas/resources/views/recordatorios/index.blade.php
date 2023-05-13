<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recordatorios') }}
        </h2>
    </x-slot>
    <a href="{{ url('/recordatorios/create') }}"
        class="block w-24 text-center uppercase my-4 mx-20 shadow bg-green-800 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 rounded-3xl"
        title="Add New nota">
        Nuevo
    </a>
    <div class="flex flex-wrap p-5 mx-20 justify-center bg-gray-300 rounded-3xl">
        @foreach ($recordatorios as $recordatorio)
            <div
                class="max-w-sm bg-cyan-700 rounded-3xl overflow-hidden shadow-lg text-center mx-4 my-4 text-white relative">
                <div class="px-6 pt-4">
                    <div class="font-bold text-xl mt-4">{{ $recordatorio->titulo }}</div>

                    <form method="POST" action="{{ url('/recordatorios' . '/' . $recordatorio->id) }}" accept-charset="UTF-8"
                        style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="inline-flex m-2" title="Delete nota"
                            onclick="return confirm(&quot;¿estas seguro?&quot;)"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6 absolute top-0 right-0 mt-2 mr-4 stroke-red-400 hover:cursor-pointer hover:stroke-red-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9.75L14.25 12m0 0l2.25 2.25M14.25 12l2.25-2.25M14.25 12L12 14.25m-2.58 4.92l-6.375-6.375a1.125 1.125 0 010-1.59L9.42 4.83c.211-.211.498-.33.796-.33H19.5a2.25 2.25 0 012.25 2.25v10.5a2.25 2.25 0 01-2.25 2.25h-9.284c-.298 0-.585-.119-.796-.33z" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="bg-green-800 px-6 py-4 border-2">
                    <p class="text-base">{{ $recordatorio->fecha }}</p>
                </div>
                <div class="flex">
                    <a href="{{ url('/recordatorios/' . $recordatorio->id) }}"
                        class="px-6 py-4 border w-1/2 flex items-center justify-center hover:bg-cyan-500 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </a>
                    <a href="{{ url('/recordatorios/' . $recordatorio->id . '/edit') }}"
                        class="px-6 py-4 border w-1/2 flex items-center justify-center hover:bg-cyan-500 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>

<div class="flex h-full">
    <p class="text-sm flex-1 border-r pr-2 hover:bg-cyan-600 hover:text-gray-200">
        <strong>Ver</strong>
    </p>
    <p class="text-sm flex-1 pl-2 hover:bg-cyan-600 hover:text-gray-200">
        <strong>Editar</strong>
    </p>
</div>
