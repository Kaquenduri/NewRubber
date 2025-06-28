<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container-fluid px-4">
        <!-- Logo a la izquierda -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('images/logo-new-rubber.png') }}" alt="New Rubber" class="me-2" style="height: 80px;">
            <span class="fw-bold text-warning text-uppercase fs-4">New Rubber Servicios Generales EIRL</span>
        </a>

        <!-- Botón responsive (hamburguesa) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido de barra -->
        <div class="collapse navbar-collapse justify-content-between" id="mainNavbar">
            <!-- Menú centrado -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fs-5" href="#inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="#quienes-somos">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="#proyectos">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="#contacto">Contacto</a>
                </li>
            </ul>

            <!-- Botón login a la derecha -->
            <div class="d-flex">
                <a href="#login" class="btn btn-warning btn-sm fs-5">Iniciar Sesión</a>
            </div>
        </div>
    </div>
</nav>