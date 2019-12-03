<?php
    /** @var array $validation */
?>
<section>
    <div class="title">
        <h2 class="mb-3 p-3">Nueva publicación</h2>
    </div>
    <div class="content">
        <form action="/publicacion/crear"
            class="form-validate"
            method="post"
            enctype="multipart/form-data"
            data-validation="{{$validation}}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="title" class="input-name">
                            <span class="input-text">Título</span>
                        </label>
                        <input id="title"
                            name="title"
                            type="text"
                            class="form-control"
                            value="{{old('title')}}"
                            placeholder="Título">
                        <div @if($errors->has('title'))
                            class="invalid-tooltip showed"
                        @else
                            class="invalid-tooltip"
                        @endif>
                            @if($errors->has('title'))
                                <small>{{$errors->first('title')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="id_categorie" class="input-name">
                            <span class="input-text">Categoría</span>
                        </label>
                        <select id="id_categorie"
                            name="id_categorie"
                            class="form-control">
                            <option value="1">Alguna categoría</option>
                            <option value="2">Alguna otra</option>
                        </select>
                        <div @if($errors->has('id_categorie'))
                            class="invalid-tooltip showed"
                        @else
                            class="invalid-tooltip"
                        @endif>
                            @if($errors->has('id_categorie'))
                                <small>{{$errors->first('id_categorie')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <div class="input-name">
                            <span class="input-text">Etiquetas</span>
                        </div>
                        <div class="form-check form-check-inline">
                            <input id="option1"
                                name="tags[]"
                                class="form-check-input"
                                type="checkbox"
                                value="1">
                            <label for="option1"
                                class="form-check-label">Alguna etiqueta</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input id="option2"
                                name="tags[]"
                                class="form-check-input"
                                type="checkbox"
                                value="2">
                            <label for="option2"
                                class="form-check-label">Alguna otra</label>
                        </div>
                        <div @if($errors->has('tags'))
                            class="invalid-tooltip showed"
                        @else
                            class="invalid-tooltip"
                        @endif>
                            @if($errors->has('tags'))
                                <small>{{$errors->first('tags')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="image" class="input-name">
                            <span class="input-text">Imagen</span>
                        </label>
                        <input id="image"
                            name="image"
                            type="file"
                            class="form-control">
                        <div @if($errors->has('image'))
                            class="invalid-tooltip showed"
                        @else
                            class="invalid-tooltip"
                        @endif>
                            @if($errors->has('image'))
                                <small>{{$errors->first('image')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="content" class="input-name">
                            <span class="input-text">Contenido</span>
                        </label>
                        <textarea id="content"
                            name="content"
                            class="form-control"
                            cols="30"
                            rows="10"
                            placeholder="Contenido"></textarea>
                        <div @if($errors->has('content'))
                            class="invalid-tooltip showed"
                        @else
                            class="invalid-tooltip"
                        @endif>
                            @if($errors->has('content'))
                                <small>{{$errors->first('content')}}</small>
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