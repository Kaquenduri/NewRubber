<nav class="navbar">
    <div class="nav-container">
        <a href="#" class="logo">
            <img src="{{ asset('images/logo-new-rubber.png') }}" alt="New Rubber" class="logo-image">
        </a>

        <ul class="nav-menu" id="navMenu">
            <li class="nav-item">
                <a href="#inicio" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item">
                <a href="#servicios" class="nav-link">Servicios</a>
            </li>
            <li class="nav-item">
                <a href="#quienes-somos" class="nav-link">Quiénes Somos</a>
            </li>
            <li class="nav-item">
                <a href="#proyectos" class="nav-link">Proyectos</a>
            </li>
            <li class="nav-item">
                <a href="#contacto" class="nav-link">Contacto</a>
            </li>
        </ul>

        <div class="right-section">
            <div class="search-container">
                <input type="text" class="search-box" placeholder="Buscar...">
                <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                </svg>
            </div>
            <a href="#login" class="login-btn" >Iniciar Sesión</a>
        </div>

        <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
            ☰
        </button>
    </div>
</nav>