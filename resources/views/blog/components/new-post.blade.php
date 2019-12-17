<?php
    /** @var array $validation */
    /** @var Category[] $categories */
    /** @var Tag[] $tags */
?>
<section>
    <div class="title">
        <h1 class="mb-3 p-3">Nueva publicación</h1>
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
                        <label for="id_category" class="input-name">
                            <span class="input-text">Categoría</span>
                        </label>
                        <select id="id_category"
                            name="id_category"
                            class="form-control">
                            @foreach($categories as $category)
                                @if(old('id_category') == $category->id_category)
                                    <option value="{{$category->id_category}}" selected>{{$category->name}}</option>
                                @else
                                    <option value="{{$category->id_category}}">{{$category->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        <div @if($errors->has('id_category'))
                            class="invalid-tooltip showed"
                        @else
                            class="invalid-tooltip"
                        @endif>
                            @if($errors->has('id_category'))
                                <small>{{$errors->first('id_category')}}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <div class="input-name">
                            <span class="input-text">Etiquetas</span>
                        </div>
                        @foreach($tags as $tag)
                            <div class="form-check form-check-inline">
                            @if(is_array(old('tags')) && in_array($tag->id_tag, old('tags')))
                                <input id="{{$tag->slug}}"
                                    name="tags[]"
                                    class="form-check-input"
                                    type="checkbox"
                                    checked
                                    value="{{$tag->id_tag}}">
                            @else
                                <input id="{{$tag->slug}}"
                                    name="tags[]"
                                    class="form-check-input"
                                    type="checkbox"
                                    value="{{$tag->id_tag}}">
                            @endif
                                <label for="{{$tag->slug}}"
                                    class="form-check-label">{{$tag->name}}</label>
                            </div>
                        @endforeach
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
                        <input class="make-a-file make-an-image"
                            type="file"
                            name="image"
                            data-text="Imagen"
                            data-notfound="No se eligió ninguna imagen.">
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
                            class="form-control ckeditor"
                            cols="30"
                            rows="10"
                            placeholder="Contenido">{!!old('content')!!}</textarea>
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