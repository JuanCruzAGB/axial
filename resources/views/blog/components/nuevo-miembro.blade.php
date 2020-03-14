<?php
    /** @var array $validation */
?>
<section>
    <div class="title">
        <h1 class="d-flex justify-content-center justify-content-md-start mb-3 p-3">Nuevo miembro</h1>
    </div>
    <div class="content px-3">
        <form action="/miembro/crear"
            class="form-validate"
            method="post"
            enctype="multipart/form-data"
            data-validation="{{$validation}}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="nombre form-group">
                        <label for="nombre" class="input-name">
                            <span class="input-text">Nombre *</span>
                        </label>
                        <input id="nombre"
                            name="nombre"
                            type="text"
                            class="form-control mb-3"
                            value="{{old('nombre')}}"
                            placeholder="Nombre">
                        <div @if($errors->has('nombre'))
                            class="support-box showed"
                        @else
                            class="support-box"
                        @endif>
                            @if($errors->has('nombre'))
                                <small>{{$errors->first('nombre')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="titulo form-group">
                        <label for="miembro_titulo" class="input-name">
                            <span class="input-text">Título</span>
                        </label>
                        <input id="miembro_titulo"
                            name="titulo"
                            type="text"
                            class="form-control mb-3"
                            value="{{old('titulo')}}"
                            placeholder="Título">
                        <div @if($errors->has('titulo'))
                            class="support-box showed"
                        @else
                            class="support-box"
                        @endif>
                            @if($errors->has('titulo'))
                                <small>{{$errors->first('titulo')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="puesto form-group">
                        <label for="puesto" class="input-name">
                            <span class="input-text">Puesto</span>
                        </label>
                        <input id="puesto"
                            name="puesto"
                            type="text"
                            class="form-control mb-3"
                            value="{{old('puesto')}}"
                            placeholder="Puesto">
                        <div @if($errors->has('puesto'))
                            class="support-box showed"
                        @else
                            class="support-box"
                        @endif>
                            @if($errors->has('puesto'))
                                <small>{{$errors->first('puesto')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="imagen form-group">
                        <input class="make-a-file make-an-image"
                            type="file"
                            name="imagen"
                            data-text="Imagen"
                            data-notfound="No se eligió ninguna imagen.">
                        <div @if($errors->has('imagen'))
                            class="support-box showed mt-3"
                        @else
                            class="support-box mt-3"
                        @endif>
                            @if($errors->has('imagen'))
                                <small>{{$errors->first('imagen')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="cv form-group">
                        <label class="input-name">
                            <span class="input-text">CV</span>
                        </label>
                        <textarea id="cv"
                            name="cv"
                            class="form-control ckeditor"
                            cols="30"
                            rows="10"
                            placeholder="CV">{!!old('cv')!!}</textarea>
                        <div @if($errors->has('cv'))
                            class="mt-3 support-box showed"
                        @else
                            class="mt-3 support-box"
                        @endif>
                            @if($errors->has('cv'))
                                <small>{{$errors->first('cv')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="link form-group">
                        <label for="link" class="input-name">
                            <span class="input-text">Link</span>
                        </label>
                        <input id="link"
                            name="link"
                            type="text"
                            class="form-control mb-3"
                            value="{{old('link')}}"
                            placeholder="Link">
                        <div @if($errors->has('link'))
                            class="support-box showed"
                        @else
                            class="support-box"
                        @endif>
                            @if($errors->has('link'))
                                <small>{{$errors->first('link')}}</small>
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