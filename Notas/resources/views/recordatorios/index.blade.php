<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recordatorios') }}
        </h2>
    </x-slot>

    <div class="flex flex-wrap p-5 mx-20 justify-center">
        @foreach ($recordatorios as $recordatorio)
            <div class="max-w-sm bg-cyan-700 rounded-3xl overflow-hidden shadow-lg text-center mx-4 my-4 text-white">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $recordatorio->titulo }}</div>
                </div>
                <div class="bg-green-800 px-6 py-4 border-2">
                    <p class="text-base">{{ $recordatorio->fecha }}</p>
                </div>
                <a href="{{ url('/recordatorios/' . $recordatorio->id) }}">
                    <div class="px-6 py-4 hover:bg-cyan-600 hover:text-gray-200 cursor-pointer">
                        <p class="text-sm"><strong>Ver Recordatorio →</strong></p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</x-app-layout>
