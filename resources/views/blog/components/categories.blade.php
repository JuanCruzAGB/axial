<?php
    /** @var Categorie[] $categories */
?>
<section>
    <div class="title">
        <h2 class="mb-3 p-3">Categorias</h2>
    </div>
    <div class="content row">
        <div class="col-12">
            @if(count($categories))
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
                        @for($i = 0; $i < count($categories); $i++)
                            <tr>
                                <th scope="row">{{$categories[$i]->id_categorie}}</th>
                                <td>{{$categories[$i]->name}}</td>
                                <td>{{$categories[$i]->user->nombre}}</td>
                                <td class="d-flex justify-content-end" colspan="2">
                                    <a href="/categoria/{{$categories[$i]->slug}}/editar" class="btn btn-primary">
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
                <p class="text-muted">Ninguna categoría encontrada</p>
            @endif
        </div>
    </div>
</section>