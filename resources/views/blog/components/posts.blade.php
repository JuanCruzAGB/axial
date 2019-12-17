<?php
    /** @var string $count */
    /** @var Post[] $posts */
?>
<section>
    <div class="title">
        <h1 class="mb-3 p-3">Publicaciones</h1>
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
                                <td><a href="/{{$post->category->slug}}/publicaciones">{{$post->category->name}}</a></td>
                                <td class="multiple">
                                    @if(count($post->tags))
                                        @foreach($post->tags as $tag)
                                            <a href="/{{$tag->slug}}/publicaciones">#{{$tag->name}}</a>
                                        @endforeach
                                    @else
                                        <p class="px-3 px-ld-0 text-muted">Ninguna</p>
                                    @endif
                                </td>
                                <td><a href="/usuario/{{$post->user->slug}}">{{$post->user->name}}</a></td>
                                <td class="accions d-flex justify-content-end">
                                    <a href="/publicacion/{{$post->slug}}" class="btn btn-primary">
                                        <span class="button-text mr-2">Ver más</span>
                                        <i class="button-icon fas fa-eye"></i>
                                    </a>
                                    <a href="/publicacion/{{$post->slug}}/editar" class="btn btn-primary ml-2">
                                        <span class="button-text mr-2">Editar</span>
                                        <i class="button-icon fas fa-pen"></i>
                                    </a>
                                    <button type="button" class="btn btn-primary ml-2" data-title="Borrar publicación" data-body="¿Estás seguro de que querés borrar la publicación?" data-url="/publicacion/{{$post->id_post}}/eliminar" data-toggle="modal" data-target="#delete-modal">
                                        <span class="button-text mr-2">Borrar</span>
                                        <i class="button-icon fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="px-3 px-ld-0 text-muted">Ninguna publicacón encontrada</p>
            @endif
        </div>
    </div>
</section>