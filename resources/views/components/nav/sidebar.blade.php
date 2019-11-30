<div class="sidebar closed push-body">
    <div class="sidebar-header">
        <a href="#" class="sidebar-button">
            <i class="sidebar-icon fas fa-times"></i>
        </a>
    </div>

    <div class="sidebar-content">
        <ul class="sidebar-menu">
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