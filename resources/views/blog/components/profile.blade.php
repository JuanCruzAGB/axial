<?php
    /** @var string $count */
    /** @var Post[] $posts */
?>
<section>
    <div class="title">
        <h1 class="mb-3 p-3">{{Auth::user()->name}}</h1>
        <div class="title-button">
            <a href="/usuario/{{Auth::user()->slug}}/editar" class="btn btn-primary">
                <span class="button-text mr-2">Editar</span>
                <i class="button-icon fas fa-pen"></i>
            </a>
        </div>
    </div>
    <div class="content row mx-0">
        <div class="picture col-12 col-lg-4 mb-3 px-0">
            <img class="picture-image" src="/storage/{{Auth::user()->picture}}" alt="{{Auth::user()->name}} profile's picture">
        </div>
        <div class="presentation col-12 col-lg-8 px-0">
            <div class="title">
                <h2 class="mb-3">{{Auth::user()->presentation->title}}</h2>
            </div>
            <div class="content">
                <p class="mb-0">{{Auth::user()->presentation->content}}</p>
            </div>
        </div>
    </div>
    <div class="title">
        <h2 class="mb-3 p-3">Publicaciones</h2>
    </div>
    <div class="content">
        <div class="parent-table col-12 p-0 px-lg-3">
            @if($count)
                <table class="posts table table-sm mb-0">
                    <thead>
                        <tr class="py-2">
                            <th class="id"></th>
                            <th>Título</th>
                            <th>Categoría</th>
                            <th>Etiquetas</th>
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
                <p class="text-muted">Ninguna publicacón encontrada</p>
            @endif
        </div>
    </div>
</section>