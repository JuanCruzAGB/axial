<?php
    /** @var Categorie[] $categories */
?>
<section>
    <div class="title">
        <h2 class="mb-3 p-3">Categorias</h2>
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
                        @foreach($categories as $categorie)
                            <tr class="py-2">
                                <th class="id">{{$categorie->id_categorie}}</th>
                                <td><a href="/{{$categorie->slug}}/publicaciones">{{$categorie->name}}</a></td>
                                <td>{{$categorie->user->name}}</td>
                                <td class="accions d-flex justify-content-end">
                                    <a href="/categoria/{{$categorie->slug}}/editar" class="btn btn-primary">
                                        <span class="button-text mr-2">Editar</span>
                                        <i class="button-icon fas fa-pen"></i>
                                    </a>
                                    <button type="button" class="btn btn-primary ml-2" data-title="Borrar categoría" data-body="¿Estás seguro de que querés borrar la categoría?" data-url="/categoria/{{$categorie->id_categorie}}/eliminar" data-toggle="modal" data-target="#delete-modal">
                                        <span class="button-text mr-2">Borrar</span>
                                        <i class="button-icon fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-muted">Ninguna categoría encontrada</p>
            @endif
        </div>
    </div>
</section>