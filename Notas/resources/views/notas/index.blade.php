<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notas') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/notas/create') }}"
                            class="block w-24 text-center uppercase my-4 mx-16 shadow bg-green-800 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 rounded-3xl">
                            Nuevo
                        </a>
                        <div class="table-responsive pb-16 mx-16 w-full">
                            <table class="rounded-3xl m-5 w-full mx-auto bg-blue-200">

                                <thead class="text-white">
                                    <tr class="border-b-2 text-center uppercase font-bold">
                                        <th class="bg-blue-950 px-4 py-3">#</th>
                                        <th class="bg-blue-950 px-4 py-3">Titulo</th>
                                        <th class="bg-blue-950 px-4 py-3">Contenido</th>
                                        <th class="bg-blue-950 px-4 py-3">Palabras clave</th>
                                        <th class="bg-blue-950 px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notas as $nota)
                                        <tr class="font-semibold text-center border-t border-black text-black">
                                            <td class="px-4 py-3 border-r border-black">{{ $loop->iteration }}</td>
                                            <td class="px-4 py-3 border-r border-black">{{ $nota->titulo }}</td>
                                            <td class="px-4 py-3 border-r border-black">{{ $nota->contenido }}</td>
                                            <td class="px-4 py-3 border-r border-black">{{ $nota->p_clave }}</td>
                                            <td class="px-4 py-3 flex items-center text-green-600">
                                                <a href="{{ url('/notas/' . $nota->id) }}" title="View nota"><button
                                                        class="inline-flex m-1"><svg xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </button></a>
                                                <a href="{{ url('/notas/' . $nota->id . '/edit') }}"
                                                    title="Edit nota"><button class="inline-flex m-1"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                        </svg>

                                                    </button></a>

                                                <form method="POST" action="{{ url('/notas' . '/' . $nota->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="inline-flex m-1" title="Delete nota"
                                                        onclick="return confirm(&quot;¿estas seguro?&quot;)"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M12 9.75L14.25 12m0 0l2.25 2.25M14.25 12l2.25-2.25M14.25 12L12 14.25m-2.58 4.92l-6.375-6.375a1.125 1.125 0 010-1.59L9.42 4.83c.211-.211.498-.33.796-.33H19.5a2.25 2.25 0 012.25 2.25v10.5a2.25 2.25 0 01-2.25 2.25h-9.284c-.298 0-.585-.119-.796-.33z" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
