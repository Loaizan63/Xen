 <header class="sticky top-0 z-[100] bg-gray-900/80 backdrop-blur-sm text-white p-4">

        <div class="container mx-auto flex justify-between items-center">
            <a href="#inicio">
                <img src="https://digital-xen.com/uploads/svg/xen-horizontal-blanco.svg" alt="Logo de Xen Digital"
                    class="w-40 md:w-48" />
            </a>

            <nav class="hidden md:flex gap-6 font-semibold items-center">
                <a href="../#inicio" class="group relative py-2"><span
                        class="group-hover:text-[var(--color-acento)] transition">Inicio</span><span
                        class="absolute left-0 bottom-0 w-0 h-0.5 bg-[var(--color-acento)] transition-all duration-300 group-hover:w-full"></span></a>
                <a href="#quienes" class="group relative py-2"><span
                        class="group-hover:text-[var(--color-acento)] transition">Nosotros</span><span
                        class="absolute left-0 bottom-0 w-0 h-0.5 bg-[var(--color-acento)] transition-all duration-300 group-hover:w-full"></span></a>
                <a href="#servicios" class="group relative py-2"><span
                        class="group-hover:text-[var(--color-acento)] transition">Servicios</span><span
                        class="absolute left-0 bottom-0 w-0 h-0.5 bg-[var(--color-acento)] transition-all duration-300 group-hover:w-full"></span></a>
                <a href="#proyectos" class="group relative py-2"><span
                        class="group-hover:text-[var(--color-acento)] transition">Proyectos</span><span
                        class="absolute left-0 bottom-0 w-0 h-0.5 bg-[var(--color-acento)] transition-all duration-300 group-hover:w-full"></span></a>
                <a href="#planes" class="group relative py-2"><span
                        class="group-hover:text-[var(--color-acento)] transition">Planes</span><span
                        class="absolute left-0 bottom-0 w-0 h-0.5 bg-[var(--color-acento)] transition-all duration-300 group-hover:w-full"></span></a>
                <a href="#contacto" class="group relative py-2"><span
                        class="group-hover:text-[var(--color-acento)] transition">Contacto</span><span
                        class="absolute left-0 bottom-0 w-0 h-0.5 bg-[var(--color-acento)] transition-all duration-300 group-hover:w-full"></span></a>                        
                <a href="https://zonax.digital-xen.com"
                    class="bg-[var(--color-acento)] text-black font-bold px-4 py-2 rounded-md hover:bg-[var(--color-acento-amarillo)] transition-colors">Zona X</a>
            </nav>

            <button id="menuToggle" class="md:hidden text-white focus:outline-none z-50" aria-label="Abrir menú"
                aria-expanded="false" aria-controls="navMenuMobile">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="line line-top"
                        d="M4 6h16"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="line line-middle"
                        d="M4 12h16"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="line line-bottom"
                        d="M4 18h16"></path>
                </svg>
            </button>
        </div>

        <div id="navMenuMobile" class="md:hidden absolute top-full left-0 w-full bg-gray-900/80 backdrop-blur-sm 
                opacity-0 -translate-y-4 pointer-events-none 
                transition-all duration-300 ease-in-out">
            <nav class="flex flex-col items-center gap-6 font-semibold py-8">
                <a href="../#inicio" class="mobile-link">Inicio</a>
                <a href="#quienes" class="mobile-link">Nosotros</a>
                <a href="#servicios" class="mobile-link">Servicios</a>
                <a href="#proyectos" class="mobile-link">Proyectos</a>
                <a href="#planes" class="mobile-link">Planes</a>
                <a href="#contacto" class="mobile-link">Contacto</a>
            </nav>
        </div>
    </header>