<nav class="nav-menu neon">
    <a href="#" class="sidebar-button">
        <i class="sidebar-icon fas fa-bars"></i>
    </a>

    <div class="nav-row">
        <a href="/demo" class="nav-title">
            <h1 class="text-md-center">Title</h1>
        </a>
    </div>

    <div class="nav-row">
        <ul class="menu-list">
            <li><a href="/panel" class="nav-link">
                Blog
            </a></li>
            <li><a href="/demo#" class="nav-link">
                Algo
            </a></li>
            <li><a href="/demo#" class="nav-link">
                Algo
            </a></li>
            @if(Auth::check())
            <li class="collapsable closed">
                <a href="#" class="collapsable-button">Panel<i class="fas fa-sort-down"></i></a>
                <ul class="collapsable-menu">
                    <li><a href="/panel#" class="collapsable-link text-white">Algo</a></li>
                    <li><a href="/panel#" class="collapsable-link text-white">Algo</a></li>
                    <li><a href="/panel#" class="collapsable-link text-white">Algo</a></li>
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