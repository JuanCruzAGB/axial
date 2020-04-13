<?php
    /** @var string $count */
    /** @var Miembro[] $miembros */
?>
<section>
    <div class="title">
        <h1 class="d-flex justify-content-center justify-content-md-start mb-3 p-3">Miembros del equipo</h1>
    </div>
    <div class="content row">
        @if($count)
            <div class="table-responsive px-2">
                <table id="mytable" class="miembros table table-bordred table-striped">
                    <thead>
                        <tr>
                            <th id="id"></th>
                            <th>Nombre</th>
                            <th>Título</th>
                            <th>Puesto</th>
                            <th id="iconos-tabla"></th>
                            <th id="iconos-tabla"></th>
                            <th id="iconos-tabla"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($miembros as $miembro)
                            <tr>
                                <td id="id" class="d-flex justify-content-center">{{$miembro->id_miembro}}</td>
                                <td>{{$miembro->nombre}}</td>
                                <td>{{$miembro->titulo}}</td>
                                <td>{{$miembro->puesto}}</td>
                                <td id="iconos-tabla">
                                    <p data-placement="top" data-toggle="tooltip" title="Ver más">
                                        <a href="/#equipo" class="btn btn-primary ver-mas btn-xs">
                                            <span class="button-icon fas fa-eye"></span>
                                        </a>
                                    </p>
                                </td>
                                <td id="iconos-tabla">
                                    <p data-placement="top" data-toggle="tooltip" title="Editar">
                                        <a href="/miembro/{{$miembro->slug}}/editar" class="btn btn-primary editar btn-xs">
                                            <span class="button-icon fas fa-pen"></span>
                                        </a>
                                    </p>
                                </td>
                                <td id="iconos-tabla">
                                    <p data-placement="top" data-toggle="tooltip" title="Echar">
                                        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-modal" data-title="Echar miembro" data-body="¿Estás seguro de que querés borrar la miembro?" data-url="/miembro/{{$miembro->id_miembro}}/echar" data-toggle="modal" data-target="#delete-modal">
                                            <span class="button-icon fas fa-trash"></span>
                                        </button>
                                    </p>
                                </td>
                            </tr>    
                        @endforeach                               
                    </tbody>
                </table>
            </div>
        @else
            <p class="px-3 px-ld-0 text-muted">Ninguna miembro encontrado</p>
        @endif
    </div>
</section>