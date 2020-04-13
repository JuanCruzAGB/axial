<nav class="nav-menu">
    <a href="#" class="sidebar-button">
        <i class="sidebar-icon fas fa-bars"></i>
    </a>

    <div class="nav-row first-row">
        <a href="/" class="nav-title">
            <h1 class="text-md-center">Axial - Grupo médico</h1>
        </a>
    </div>

    <div class="nav-row second-row">
        <ul class="menu-list">
            <li><a href="/" class="nav-link">
                Inicio
            </a></li>
            <li><a href="/#nuestros-servicios" class="nav-link">
                Servicios
            </a></li>
            <li><a href="/#patologias" class="nav-link">
                Patologías
            </a></li>
            <li><a href="/#equipo" class="nav-link">
                Equipo
            </a></li>
            <li><a href="/noticias" class="nav-link">
                Blog
            </a></li>
            <li><a href="/#contacto" class="nav-link">
                Contacto
            </a></li>
            @if(Auth::check())
                <li class="collapsable closed">
                    <a href="/panel" class="collapsable-button">Panel<i class="collapsable-icon fas fa-sort-down"></i></a>
                    <ul class="collapsable-menu">
                        <li class="m-0"><a href="/panel#noticias" class="collapsable-link">Noticias</a></li>
                        <li class="m-0"><a href="/panel#nueva-noticia" class="collapsable-link">Nueva noticia</a></li>
                        <li class="m-0"><a href="/panel#miembros" class="collapsable-link">Miembros del equipo</a></li>
                        <li class="m-0"><a href="/panel#nuevo-miembro" class="collapsable-link">Nuevo miembro</a></li>
                    </ul>
                </li>
                <li><a href="/salir" class="nav-link">
                    Cerrar Sesión
                </a></li>
            @endif
        </ul>
    </div>

    @component('components.nav.sidebar')
    @endcomponent
</nav>