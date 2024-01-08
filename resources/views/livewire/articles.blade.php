<div>
    <h1>Listado de Artículos</h1>
    <a href="{{route('articles.create')}}">Crear</a>
    <label>
    <input type="search" wire:model.live="search" placeholder="Buscar..." >
    </label>
    <ul>
        @foreach ($articles as $article)

        <li>
            <a href="{{route('articles.show', $article)}}"> {{ $article->title }}</a>

            <a href="{{route('articles.edit', $article)}}"> Editar </a>
           </li>
            
        @endforeach
    </ul>
</div>
