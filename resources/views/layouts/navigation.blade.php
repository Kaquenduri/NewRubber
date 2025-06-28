<x-app-layout>
    <nav class="bg-gradient-to-r from-blue-900 to-blue-500 p-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto"> <!-- Cambia el path si es necesario -->
                <span class="text-yellow-400 font-bold uppercase text-sm">New Rubber</span>
            </div>

            <!-- Enlaces -->
            <div class="hidden md:flex space-x-6 text-white font-medium">
                <a href="{{ route('home') }}" class="hover:text-yellow-400">Inicio</a>
                <a href="{{ route('services') }}" class="hover:text-yellow-400">Servicios</a>
                <a href="{{ route('about') }}" class="hover:text-yellow-400">Quiénes Somos</a>
                <a href="{{ route('projects') }}" class="hover:text-yellow-400">Proyectos</a>
                <a href="{{ route('contact') }}" class="hover:text-yellow-400">Contacto</a>
            </div>

            <!-- Buscador e inicio de sesión -->
            <div class="flex items-center space-x-4">
                <!-- Buscador -->
                <div class="relative">
                    <input type="text" placeholder="Buscar..." class="rounded-full px-4 py-1 pl-6 pr-10 focus:outline-none focus:ring-2 focus:ring-blue-300 text-sm">
                    <span class="absolute right-3 top-1.5 text-gray-500">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
                        </svg>
                    </span>
                </div>

                <!-- Botón Iniciar Sesión -->
                <a href="{{ route('login') }}" class="border border-blue-200 text-white px-4 py-1 rounded-full hover:bg-blue-600 transition text-sm">
                    Iniciar Sesión
                </a>
            </div>
        </div>
    </nav>
</x-app-layout>
