<div class="sidebar closed push-body">
    <div class="sidebar-header">
        <a href="#" class="sidebar-button">
            <i class="sidebar-icon fas fa-times"></i>
        </a>
    </div>

    <div class="sidebar-content">
        <ul class="sidebar-menu">
            <li><a href="/" class="nav-link">
                Inicio
            </a></li>
            <li><a href="/quienes-somos" class="nav-link">
                Quiénes Somos
            </a></li>
            <li><a href="/especialidades" class="nav-link">
                Especialidades
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
            <li><a href="/panel" class="nav-link">
                Panel
            </a></li>
            <li><a href="/salir" class="nav-link">
                Cerrar Sesion
            </a></li>
            @endif
        </ul>
    </div>
</div>