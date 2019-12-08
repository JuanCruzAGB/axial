<?php
    /** @var string $count */
    /** @var Post[] $posts */
?>
<section>
    <div class="title">
        <h2 class="mb-3 p-3">Publicaciones</h2>
    </div>
    <div class="content row">
        <div class="parent-table col-12 p-0 px-lg-3">
            @if($count)
                <table class="posts table table-sm mx-3 mb-0 mx-lg-0">
                    <thead>
                        <tr class="py-2">
                            <th class="id"></th>
                            <th>Título</th>
                            <th>Categoría</th>
                            <th>Etiquetas</th>
                            <th>Creada por:</th>
                            <th class="accions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr class="py-2">
                                <th class="id">{{$post->id_post}}</th>
                                <td>{{$post->title}}</td>
                                <td><a href="/{{$post->categorie->slug}}/publicaciones">{{$post->categorie->name}}</a></td>
                                <td class="multiple">
                                    @if(count($post->tags))
                                        @foreach($post->tags as $tag)
                                            <a href="/{{$tag->slug}}/publicaciones">#{{$tag->name}}</a>
                                        @endforeach
                                    @else
                                        <p class="text-muted">Ninguna</p>
                                    @endif
                                </td>
                                <td>{{$post->user->name}}</td>
                                <td class="accions d-flex justify-content-end">
                                    <a href="/publicacion/{{$post->slug}}" class="btn btn-primary">
                                        <span class="button-text mr-2">Ver más</span>
                                        <i class="button-icon fas fa-eye"></i>
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