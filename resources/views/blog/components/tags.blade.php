<?php
    /** @var Tag[] $tags */
?>
<section>
    <div class="title">
        <h2 class="mb-3 p-3">Etiquetas</h2>
    </div>
    <div class="content row">
        <div class="col-12 p-0 px-lg-3">
            @if(count($tags))
                <table class="tags table table-sm mx-3 mb-0 mx-lg-0">
                    <thead>
                        <tr>
                            <th class="id"></th>
                            <th>Nombre</th>
                            <th>Creada por:</th>
                            <th class="accions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <th class="id">{{$tag->id_tag}}</th>
                                <td><a href="/{{$tag->slug}}/publicaciones">{{$tag->name}}</a></td>
                                <td>{{$tag->user->name}}</td>
                                <td class="accions d-flex justify-content-end">
                                    <a href="/etiqueta/{{$tag->slug}}/editar" class="btn btn-primary">
                                        <span class="button-text mr-2">Editar</span>
                                        <i class="button-icon fas fa-pen"></i>
                                    </a>
                                    <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#exampleModal">
                                        <span class="button-text mr-2">Borrar</span>
                                        <i class="button-icon fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-muted">Ninguna etiqueta encontrada</p>
            @endif
        </div>
    </div>
</section>