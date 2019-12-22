<?php
    /** @var string $count */
    /** @var Miembro[] $miembros */
?>
<section>
    <div class="title">
        <h1 class="mb-3 p-3">Miembros del equipo</h1>
    </div>
    <div class="content row">
        <div class="parent-table col-12 p-0 px-lg-3">
            @if($count)
                <table class="miembros table table-sm mx-3 mb-0 mx-lg-0">
                    <thead>
                        <tr class="py-2">
                            <th class="id"></th>
                            <th>Nombre</th>
                            <th>Título</th>
                            <th>Puesto</th>
                            <th class="accions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($miembros as $miembro)
                            <tr class="py-2">
                                <th class="id">{{$miembro->id_miembro}}</th>
                                <td>{{$miembro->nombre}}</td>
                                <td>{{$miembro->titulo}}</td>
                                <td>{{$miembro->puesto}}</td>
                                <td class="accions d-flex justify-content-end">
                                    <a href="/miembro/{{$miembro->slug}}/editar" class="btn btn-primary ml-2">
                                        <span class="button-text mr-2">Editar</span>
                                        <i class="button-icon fas fa-pen"></i>
                                    </a>
                                    <button type="button" class="btn btn-primary ml-2" data-title="Echar miembro del equipo" data-body="¿Estás seguro de que querés echar al miembro del equipo?" data-url="/miembro/{{$miembro->id_miembro}}/echar" data-toggle="modal" data-target="#delete-modal">
                                        <span class="button-text mr-2">Echar</span>
                                        <i class="button-icon fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="px-3 px-ld-0 text-muted">Ninguna miembro encontrado</p>
            @endif
        </div>
    </div>
</section>