<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Noticias') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4">
        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="text-2xl">
                            {{ $noticia->titulo }}
                        </div>

                        <div class="mt-4 text-gray-500">
                            {{ $noticia->descricao }}
                        </div>

                        <div class="mt-6">
                           @if($noticia->url)
                                <img src="{{ asset($noticia->url) }}" alt="{{ $noticia->titulo }}" class="w-50 h-50 object-fit-cover border rounded m-auto">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>