<?php
    /** @var Tag[] $tags */
?>
<section>
    <div class="title">
        <h2 class="mb-3 p-3">Etiquetas</h2>
    </div>
    <div class="content row">
        <div class="col-12">
            @if(count($tags))
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Creada por:</th>
                            <th colspan="2" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <th scope="row">{{$tag->id_tag}}</th>
                                <td><a href="/{{$tag->slug}}/publicaciones">{{$tag->name}}</a></td>
                                <td>{{$tag->user->name}}</td>
                                <td class="d-flex justify-content-end" colspan="2">
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