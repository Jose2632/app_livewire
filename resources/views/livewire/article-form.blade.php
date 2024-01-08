<div>
    <h1>Crear Artículo</h1>
    <form wire:submit='save'>
        <label>
            <input wire:model.live='article.title' type="text" placeholder="Título">
            @error('article.title') <div>{{$message}}</div>  @enderror
        </label>
        <label>
            <textarea wire:model.live='article.content' placeholder="Contenido"></textarea>
            @error('article.content') <div>{{$message}}</div>  @enderror
        </label>
        <input type="submit" value="Guardar">
    </form>
</div>
