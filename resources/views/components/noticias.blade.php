<?php
    /** @var string $count */
    /** @var Noticia[] $noticias */
?>
<section>
    <div class="title">
        <h1 class="mb-3 p-3">Noticias</h1>
    </div>
    <div class="content row">
        <div class="parent-table col-12 p-0 px-lg-3">
            @if($count)
                <table class="noticias table table-sm mx-3 mb-0 mx-lg-0">
                    <thead>
                        <tr class="py-2">
                            <th class="id"></th>
                            <th>Título</th>
                            <th class="accions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($noticias as $noticia)
                            <tr class="py-2">
                                <th class="id">{{$noticia->id_noticia}}</th>
                                <td>{{$noticia->titulo}}</td>
                                <td class="accions d-flex justify-content-end">
                                    <a href="/noticia/{{$noticia->slug}}" class="btn btn-primary">
                                        <span class="button-text mr-2">Ver más</span>
                                        <i class="button-icon fas fa-eye"></i>
                                    </a>
                                    <a href="/noticia/{{$noticia->slug}}/editar" class="btn btn-primary ml-2">
                                        <span class="button-text mr-2">Editar</span>
                                        <i class="button-icon fas fa-pen"></i>
                                    </a>
                                    <button type="button" class="btn btn-primary ml-2" data-title="Borrar noticia" data-body="¿Estás seguro de que querés borrar la noticia?" data-url="/noticia/{{$noticia->id_noticia}}/eliminar" data-toggle="modal" data-target="#delete-modal">
                                        <span class="button-text mr-2">Borrar</span>
                                        <i class="button-icon fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="px-3 px-ld-0 text-muted">Ninguna noticia encontrada</p>
            @endif
        </div>
    </div>
</section>