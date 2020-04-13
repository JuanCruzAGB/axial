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
            <li><a href="/#servicios" class="nav-link">
                Servicios
            </a></li>
            <li><a href="/#equipo" class="nav-link">
                Equipo
            </a></li>
            <li><a href="/#contacto" class="nav-link">
                Contacto
            </a></li>
            <li><a href="/noticias" class="nav-link">
                Blog
            </a></li>
            @if(Auth::check())
            <li><a href="/panel" class="nav-link">
                Panel
            </a></li>
            <li><a href="/salir" class="nav-link">
                Cerrar Sesión
            </a></li>
            @endif
        </ul>
    </div>

    @component('components.nav.sidebar')
    @endcomponent
</nav>