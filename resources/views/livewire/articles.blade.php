<div>
    <h1>Listado de Artículos</h1>

    <input type="search" wire:model.live="search" placeholder="Buscar..." >
   
    <ul>
        @foreach ($articles as $article)

        <li>{{ $article->title }}</li>
            
        @endforeach
    </ul>
</div>
