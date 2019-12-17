<?php
    /** @var Category[] $categories */
?>
<section>
    <div class="title">
        <h1 class="mb-3 p-3">Categorias</h1>
    </div>
    <div class="content row">
        <div class="col-12 p-0 px-lg-3">
            @if(count($categories))
                <table class="categories table table-sm mx-3 mb-0 mx-lg-0">
                    <thead>
                        <tr class="py-2">
                            <th class="id"></th>
                            <th>Nombre</th>
                            <th>Creada por:</th>
                            <th class="accions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr class="py-2">
                                <th class="id">{{$category->id_category}}</th>
                                <td><a href="/categoria/{{$category->slug}}/publicaciones">{{$category->name}}</a></td>
                                <td><a href="/usuario/{{$category->user->slug}}">{{$category->user->name}}</a></td>
                                <td class="accions d-flex justify-content-end">
                                    <a href="/categoria/{{$category->slug}}/editar" class="btn btn-primary">
                                        <span class="button-text mr-2">Editar</span>
                                        <i class="button-icon fas fa-pen"></i>
                                    </a>
                                    <button type="button" class="btn btn-primary ml-2" data-title="Borrar categoría" data-body="¿Estás seguro de que querés borrar la categoría?" data-url="/categoria/{{$category->id_category}}/eliminar" data-toggle="modal" data-target="#delete-modal">
                                        <span class="button-text mr-2">Borrar</span>
                                        <i class="button-icon fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="px-3 px-ld-0 text-muted">Ninguna categoría encontrada</p>
            @endif
        </div>
    </div>
</section>