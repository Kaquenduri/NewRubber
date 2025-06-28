function toggleMobileMenu() {
    const navMenu = document.getElementById('navMenu');
    navMenu.classList.toggle('active');
}

// Funcionalidad de búsqueda
document.addEventListener('DOMContentLoaded', function() {
    const searchBox = document.querySelector('.search-box');
    const searchIcon = document.querySelector('.search-icon');
    
    // Búsqueda con Enter
    if (searchBox) {
        searchBox.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const searchTerm = this.value;
                if (searchTerm.trim()) {
                    alert(`Buscando: ${searchTerm}`);
                }
            }
        });
    }

    // Búsqueda con clic en la lupa
    if (searchIcon) {
        searchIcon.addEventListener('click', function() {
            const searchTerm = searchBox.value;
            if (searchTerm.trim()) {
                alert(`Buscando: ${searchTerm}`);
            }
        });
    }

    // Cerrar menú móvil al hacer clic en un enlace
    document.querySelectorAll('.nav-link, .login-btn').forEach(link => {
        link.addEventListener('click', () => {
            document.getElementById('navMenu').classList.remove('active');
        });
    });
});