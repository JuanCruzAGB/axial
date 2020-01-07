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
                    <div class="form-group">
                        <label for="nombre" class="input-name">
                            <span class="input-text">Nombre</span>
                        </label>
                        <input id="nombre"
                            name="nombre"
                            type="text"
                            class="form-control mb-3"
                            value="{{old('nombre')}}"
                            placeholder="Nombre">
                        <div @if($errors->has('nombre'))
                            class="invalid-tooltip showed"
                        @else
                            class="invalid-tooltip"
                        @endif>
                            @if($errors->has('nombre'))
                                <small>{{$errors->first('nombre')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
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
                            class="invalid-tooltip showed"
                        @else
                            class="invalid-tooltip"
                        @endif>
                            @if($errors->has('puesto'))
                                <small>{{$errors->first('puesto')}}</small>
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
                    <div class="estudios form-group mb-0 pr-3">
                        <label class="input-name">
                            <span class="input-text">Estudios</span>
                        </label>
                        @if(old('estudios'))
                            @for($i = 0; $i < count(old('estudios')); $i++)
                                <div class="row d-flex justify-content-between mb-3">
                                    <div class="col-8">
                                        <input name="estudios[]"
                                            type="text"
                                            class="form-control"
                                            value="{{old('estudios.' . $i)}}"
                                            placeholder="Estudio">
                                    </div>
                                    @if(($i + 1) < count(old('estudios')))
                                        <div class="col-2">
                                            <button class="less-button">
                                                <i class="button-icon fas fa-minus"></i>
                                            </button>
                                        </div>
                                    @else
                                        <div class="col-2">
                                            <button class="add-button">
                                                <i class="button-icon fas fa-plus"></i>
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            @endfor
                        @else
                            <div class="row d-flex justify-content-between mb-3">
                                <div class="col-8">
                                    <input name="estudios[]"
                                        type="text"
                                        class="form-control"
                                        placeholder="Estudio">
                                </div>

                                <div class="col-2">
                                    <button class="add-button">
                                        <i class="button-icon fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <div @if($errors->has('estudios') || $errors->has('estudios.*'))
                            class="invalid-tooltip showed mb-3"
                        @else
                            class="invalid-tooltip mb-3"
                        @endif>
                            @if($errors->has('estudios'))
                                <small>{{$errors->first('estudios')}}</small>
                            @elseif($errors->has('estudios.*'))
                                <small>{{$errors->first('estudios.*')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
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
                            class="invalid-tooltip showed"
                        @else
                            class="invalid-tooltip"
                        @endif>
                            @if($errors->has('cv'))
                                <small>{{$errors->first('cv')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
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
                            class="invalid-tooltip showed"
                        @else
                            class="invalid-tooltip"
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