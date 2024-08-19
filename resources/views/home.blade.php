<x-app-layout class="flex-1">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Página de Noticias') }}
        </h2>
    </x-slot>

    <div class="container py-12">
        <div class="p-6 text-gray-900 dark:text-gray-200">
            <h1 class="text-2xl font-semibold">Noticias</h1>
            @if ($noticias->isEmpty())
                <p>Não há noticias disponiveís no momento.</p>
            @else
                <div class="row">
                    @foreach ($noticias as $noticia)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <div class="card"">
                                @if($noticia->url)
                                    <a href="#" class="img-thumbnail">
                                        <img src="{{ asset($noticia->url) }}" alt="{{ $noticia->titulo }}" class="rounded img-fluid" style="width: 100%; height: 250px; object-fit: cover;">
                                    </a>
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $noticia->titulo }}</h5>  
                                    <p class="card-text">{{ $noticia->descricao }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
