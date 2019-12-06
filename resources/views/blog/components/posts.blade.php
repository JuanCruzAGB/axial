<?php
    /** @var string $count */
    /** @var Post[] $posts */
?>
<section>
    <div class="title">
        <h2 class="mb-3 p-3">Publicaciones</h2>
    </div>
    <div class="content row">
        <div class="col-12">
            @if($count)
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Título</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Etiquetas</th>
                            <th scope="col">Creada por:</th>
                            <th colspan="2" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <th scope="row">{{$post->id_post}}</th>
                                <td>{{$post->title}}</td>
                                <td><a href="/{{$post->categorie->slug}}/publicaciones">{{$post->categorie->name}}</a></td>
                                <td>
                                    @foreach($post->tags as $tag)
                                        <a href="/{{$tag->slug}}/publicaciones">#{{$tag->name}}</a>
                                    @endforeach
                                </td>
                                <td>{{$post->user->name}}</td>
                                <td class="d-flex justify-content-end" colspan="2">
                                    <a href="/publicacion/{{$post->slug}}" class="btn btn-primary">
                                        <span class="button-text mr-2">Ver más</span>
                                        <i class="button-icon fas fa-plus"></i>
                                    </a>
                                    <a href="/publicacion/{{$post->slug}}/editar" class="btn btn-primary ml-2">
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
                <p class="text-muted">Ninguna publicacón encontrada</p>
            @endif
        </div>
    </div>
</section>