<?php
    /** @var string $count */
    /** @var Noticia[] $noticias */
?>
<section>
    <div class="title">
        <h1 class="d-flex justify-content-center justify-content-md-start mb-3 p-3">Noticias</h1>
    </div>
    <div class="content row">
        @if($count)
            <div class="table-responsive px-2">
                <table id="mytable" class="noticias table table-bordred table-striped">
                    <thead>
                        <tr>
                            <th id="id"></th>
                            <th>Titulo</th>
                            <th>Contenido</th>
                            <th id="iconos-tabla"></th>
                            <th id="iconos-tabla"></th>
                            <th id="iconos-tabla"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($noticias as $noticia)
                        <tr>
                            <td id="id" class="d-flex justify-content-center">{{$noticia->id_noticia}}</td>
                            <td class="preview">{{$noticia->titulo}}</td>
                            <td class="preview">{!!$noticia->contenido!!}</td>
                            <td id="iconos-tabla">
                                <p data-placement="top" data-toggle="tooltip" title="Ver más">
                                    <a href="/noticia/{{$noticia->slug}}" class="btn btn-primary ver-mas btn-xs">
                                        <span class="button-icon fas fa-eye"></span>
                                    </a>
                                </p>
                            </td>
                            <td id="iconos-tabla">
                                <p data-placement="top" data-toggle="tooltip" title="Editar">
                                    <a href="/noticia/{{$noticia->slug}}/editar" class="btn btn-primary editar btn-xs">
                                        <span class="button-icon fas fa-pen"></span>
                                    </a>
                                </p>
                            </td>
                            <td id="iconos-tabla">
                                <p data-placement="top" data-toggle="tooltip" title="Borrar">
                                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-modal" data-title="Borrar noticia" data-body="¿Estás seguro de que querés borrar la noticia?" data-url="/noticia/{{$noticia->id_noticia}}/eliminar" data-toggle="modal" data-target="#delete-modal">
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
            <p class="px-3 px-ld-0 text-muted">Ninguna noticia encontrada</p>
        @endif
    </div>
</section>