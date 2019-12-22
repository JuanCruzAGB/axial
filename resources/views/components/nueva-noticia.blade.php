<?php
    /** @var array $validation */
?>
<section>
    <div class="title">
        <h1 class="mb-3 p-3">Nueva noticia</h1>
    </div>
    <div class="content">
        <form action="/noticia/crear"
            class="form-validate"
            method="post"
            enctype="multipart/form-data"
            data-validation="{{$validation}}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="titulo" class="input-name">
                            <span class="input-text">Título</span>
                        </label>
                        <input id="titulo"
                            name="titulo"
                            type="text"
                            class="form-control mb-3"
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
                    <div class="form-group">
                        <input class="make-a-file make-an-image"
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
                    <div class="form-group">
                        <label class="input-name">
                            <span class="input-text">Contenido</span>
                        </label>
                        <textarea name="contenido"
                            class="form-control ckeditor"
                            cols="30"
                            rows="10"
                            placeholder="Contenido">{!!old('contenido')!!}</textarea>
                        <div @if($errors->has('contenido'))
                            class="invalid-tooltip showed"
                        @else
                            class="invalid-tooltip"
                        @endif>
                            @if($errors->has('contenido'))
                                <small>{{$errors->first('contenido')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="form-submit btn btn-primary">Crear</button>
                </div>
            </div>
        </form>
    </div>
</section>