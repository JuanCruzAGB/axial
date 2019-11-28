<div class="sidebar closed push-body">
    <div class="sidebar-header">
        <a href="#" class="sidebar-button">
            <i class="sidebar-icon fas fa-times text-white"></i>
        </a>
    </div>

    <div class="sidebar-content">
        <ul class="sidebar-menu">
            <li><a href="/panel" class="nav-link text-white">
                Blog
            </a></li>
            <li><a href="/demo#" class="nav-link text-white">
                Algo
            </a></li>
            <li><a href="/demo#" class="nav-link text-white">
                Algo
            </a></li>
            @if(Auth::check())
            <li><a href="/panel" class="nav-link text-white">
                Panel
            </a></li>
            <li><a href="/salir" class="nav-link text-white">
                Cerrar Sesion
            </a></li>
            @endif
        </ul>
    </div>
</div>