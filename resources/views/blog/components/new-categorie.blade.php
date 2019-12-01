<section>
    <div class="title">
        <h2 class="mb-3 p-3">Nueva categoría</h2>
    </div>
    <div class="content">
        <form action="/categoria/crear" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="name" class="input-name">
                            <span class="input-text">Nombre</span>
                        </label>
                        <input id="name"
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
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </div>
        </form>
    </div>
</section>