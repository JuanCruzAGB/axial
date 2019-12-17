<?php
    /** @var array $validation */
?>
<section>
    <div class="title">
        <h1 class="mb-3 p-3">Nueva categoría</h1>
    </div>
    <div class="content">
        <form action="/categoria/crear"
            class="form-validate"
            method="post"
            enctype="multipart/form-data"
            data-validation="{{$validation}}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="categorie-name" class="input-name">
                            <span class="input-text">Nombre</span>
                        </label>
                        <input id="categorie-name"
                            name="name"
                            type="text"
                            class="form-control"
                            value="{{old('name')}}"
                            placeholder="Nombre">
                        <div @if($errors->has('name'))
                            class="invalid-tooltip showed"
                        @else
                            class="invalid-tooltip"
                        @endif>
                            @if($errors->has('name'))
                                <small>{{$errors->first('name')}}</small>
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