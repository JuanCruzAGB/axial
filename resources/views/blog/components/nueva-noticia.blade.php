<?php
    /** @var array $validation */
?>
<section>
    <div class="title">
        <h1 class="d-flex justify-content-center justify-content-md-start mb-3 p-3">Nueva noticia</h1>
    </div>
    <div class="content px-3">
        <form action="/noticia/crear"
            class="form-validate"
            method="post"
            enctype="multipart/form-data"
            data-validation="{{$validation}}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="titulo form-group">
                        <label for="noticia_titulo" class="input-name">
                            <span class="input-text">Título</span>
                        </label>
                        <input id="noticia_titulo"
                            name="titulo"
                            type="text"
                            class="form-control mb-3 w-75"
                            value="{{old('titulo')}}"
                            placeholder="Título">
                        <div @if($errors->has('titulo'))
                            class="invalid-tooltip showed"
                        @else
                            class="invalid-tooltip"
                        @endif>
                            @if($errors->has('titulo'))
                                <small>{{$errors->first('titulo')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="imagen form-group">
                        <input class="make-a-file make-an-image w-75"
                            type="file"
                            name="imagen"
                            data-text="Imagen"
                            data-notfound="No se eligió ninguna imagen.">
                        <div @if($errors->has('imagen'))
                            class="invalid-tooltip showed mt-3"
                        @else
                            class="invalid-tooltip mt-3"
                        @endif>
                            @if($errors->has('imagen'))
                                <small>{{$errors->first('imagen')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="contenido form-group">
                        <label class="input-name">
                            <span class="input-text">Contenido</span>
                        </label>
                        <textarea id="contenido"
                            name="contenido"
                            class="form-control ckeditor w-75"
                            cols="30"
                            rows="10"
                            placeholder="Contenido">{!!old('contenido')!!}</textarea>
                        <div @if($errors->has('contenido'))
                            class="mt-3 invalid-tooltip showed mt-3"
                        @else
                            class="mt-3 invalid-tooltip mt-3"
                        @endif>
                            @if($errors->has('contenido'))
                                <small>{{$errors->first('contenido')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="form-submit btn btn-primary crear-noticia">Crear</button>
                </div>
            </div>
        </form>
    </div>
</section>