<?php
    /** @var Post[] $posts */
?>
<section>
    <div class="title">
        <h2 class="mb-3 p-3">Publicaciones</h2>
    </div>
    <div class="content row">
        <div class="col-12">
            @if(count($posts))
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Título</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Etiquetas</th>
                            <th scope="col">Creada por:</th>
                            <th colspan="3" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < count($posts); $i++)
                            <tr>
                                <th scope="row">{{$posts[$i]->id_post}}</th>
                                <td>{{$posts[$i]->title}}</td>
                                <td>{{$posts[$i]->categorie->name}}</td>
                                <td>
                                    @for($j = 0; $j < count($posts[$j]->tags); $j++)
                                        <a href="#{{$posts[$i]->tags[$j]->slug}}">#{{$posts[$i]->tags[$j]->name}}</a>
                                    @endfor
                                </td>
                                <td>{{$posts[$i]->user->nombre}}</td>
                                <td class="d-flex justify-content-end" colspan="2">
                                    <a href="/publicacion/{{$posts[$i]->slug}}" class="btn btn-primary">
                                        <span class="button-text mr-2">Ver más</span>
                                        <i class="button-icon fas fa-add"></i>
                                    </a>
                                    <a href="/publicacion/{{$posts[$i]->slug}}/editar" class="btn btn-primary">
                                        <span class="button-text mr-2">Editar</span>
                                        <i class="button-icon fas fa-pen"></i>
                                    </a>
                                    <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#exampleModal">
                                        <span class="button-text mr-2">Borrar</span>
                                        <i class="button-icon fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            @else
                <p class="text-muted">Ninguna publicacón encontrada</p>
            @endif
        </div>
    </div>
</section>