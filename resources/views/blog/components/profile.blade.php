<section>
    <div class="title">
        <h2 class="mb-3 p-3">{{Auth::user()->name}}</h2>
        <div class="title-button">
            <a href="/usuario/{{Auth::user()->slug}}/editar" class="btn btn-primary">
                <span class="button-text mr-2">Editar</span>
                <i class="button-icon fas fa-pen"></i>
            </a>
        </div>
    </div>
    <div class="content row mx-0">
        <div class="picture col-lg-4 px-0">
            <img class="picture-image" src="/storage/{{Auth::user()->picture}}" alt="{{Auth::user()->name}} profile's picture">
        </div>
        <div class="presentation col-lg-8 px-0">
            <div class="title">
                <h3>{{Auth::user()->presentation->title}}</h3>
            </div>
            <div class="content">
                <p>{{Auth::user()->presentation->content}}</p>
            </div>
        </div>
    </div>
    <div class="title">
        <h2 class="mb-3 p-3">Publicaciones</h2>
    </div>
    <div class="content">
        
    </div>
</section>