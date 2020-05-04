<?php
    /** @var Miembro[] $miembros */
?>
<div id="equipo" class="equipo col-12 p-0">
    <h2 class="text-center my-4 pt-5">Staff médico</h2>

    <div class="listado">
        <div class="miembros cards mx-4 mx-lg-0 pb-0">
            @if(count($miembros))
                @foreach($miembros as $miembro)
                    <div id="{{$miembro->slug}}" class="miembro collapsable-card card mr-4 mr-lg-0 p-0">
                        <div class="card-background">
                            <img class="mb-0" src="{{asset('storage/' . $miembro->imagen)}}" alt="{{$miembro->nombre}}">
                        </div>
                        <div class="card-body mb-4 p-3 pb-5">
                            <h3 class="m-0 pb-3 text-center">{{$miembro->nombre}}</h3>
                            <h4 class="m-0 pb-3 text-center">{{$miembro->titulo}}</h4>
                            <a class="btn btn-secondary" href="/quienes-somos#equipo">
                                <i class="fas fa-chevron-right pr-2 pb-0"></i> Ver más
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="empty-miembro card mr-3 p-0">
                    <div class="empty-background"></div>
                    <div class="card-body p-3">
                        <div class="empty-nombre"></div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>