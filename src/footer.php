<footer id="contacto" class="relative bg-[var(--color-primario)] text-white pt-24 pb-16">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none" class="block w-full h-[100px]">
            <path fill="#FFFFFF" d="M1440,100 C1080,30 720,100 360,70 C180,55 0,70 0,70 L0,0 L1440,0 L1440,100 Z"></path>
        </svg>
    </div>
    
        <p class="text-lg font-semibold text-slate-200 text-center max-w-3xl mx-auto">
            Si tienes más dudas, no dudes en <a href="#contacto" class="text-[var(--color-acento)] hover:underline font-bold">escribirnos</a>.
        </p>
    </div>
    <div class="container mx-auto max-w-7xl grid md:grid-cols-2 px-6 gap-12 text-center md:text-left">
        <div class="flex flex-col items-center md:items-start">
            <h3 class="text-2xl font-bold mb-4">Hablemos de tu Proyecto</h3>
            <p class="text-slate-400 mb-6">Completa el formulario y nuestro equipo se pondrá en contacto contigo para transformar tu idea en una realidad digital.</p>
            <div class="text-left space-y-3">
                <p>📍 Cali, Colombia</p>
                <p>🕒 <strong>Horario:</strong> Lun-Vie: 8:00 am - 5:00 pm</p>
                <p>📧 <strong>Email:</strong> <a href="mailto:info@digital-xen.com" class="text-[var(--color-acento)] hover:text-[var(--color-acento-amarillo)] transition">info@digital-xen.com</a></p>
                </div>
                            <a href="#inicio">
                <img src="https://digital-xen.com/uploads/svg/xen-horizontal-blanco.svg" alt="Logo de Xen Digital"
                    class="w-full py-12" />
            </a>
        </div>
            <form id="contactForm" class="flex flex-col gap-4 w-full bg-[var(--color-primario)] p-8 rounded-lg">
                <input type="text" name="nombre" placeholder="Tu nombre" required
                    class="p-3 rounded-md bg-[#0A192F] text-white border-2 border-transparent focus:border-[var(--color-acento)] focus:outline-none transition" />
                <input type="email" name="correo" placeholder="Tu correo" required
                    class="p-3 rounded-md bg-[#0A192F] text-white border-2 border-transparent focus:border-[var(--color-acento)] focus:outline-none transition" />
                <textarea name="mensaje" rows="4" placeholder="Cuéntanos sobre tu proyecto..." required
                    class="p-3 rounded-md bg-[#0A192F] text-white border-2 border-transparent focus:border-[var(--color-acento)] focus:outline-none transition"></textarea>
                <div class="flex items-start gap-3 mt-4">
                    <input type="checkbox" id="legal-consent" name="legal-consent" required
                        class="mt-1 h-4 w-4 rounded border-gray-300 text-[var(--color-primario)] focus:ring-[var(--color-primario)] cursor-pointer">
                    <label for="legal-consent" class="text-sm text-slate-600 text-white"> He leído y acepto los <a
                            href="./legal/terminos-condiciones.html" target="_blank" rel="noopener noreferrer"
                            class="underline font-semibold text-[var(--color-acento)] hover:text-blue-800">Términos y
                            Condiciones</a> y la
                        <a href="./legal/politica-privacidad.html" target="_blank" rel="noopener noreferrer"
                            class="underline font-semibold text-[var(--color-acento)] hover:text-blue-800">
                            Política de Privacidad
                        </a>.
                    </label>
                </div>
                <button id="btnEnviar" type="submit"
                    class="bg-[var(--color-acento)] justify-center text-black font-bold p-3 rounded hover:bg-[var(--color-acento-amarillo)] transition flex items-center gap-2">
                    <span id="btnText">Enviar Mensaje</span>
                    <svg id="spinner" class="w-5 h-5 animate-spin hidden" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                        </circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                </button>
            </form>
    </div>
    
    <div class="container mx-auto px-6 mt-12 pt-8 border-t border-gray-700 flex flex-col md:flex-row justify-between items-center text-center text-sm text-slate-400">
        <p class="mb-4 md:mb-0">&copy; 2025 Xen Digital. Todos los derechos reservados.</p>
        <nav class="flex gap-4">
            <a href="https://digital-xen.com/legal/politica-privacidad.html" class="hover:text-[var(--color-acento)] transition-colors">Política de Privacidad</a>
            <a href="https://digital-xen.com/legal/terminos-condiciones.html" class="hover:text-[var(--color-acento)] transition-colors">Términos y Condiciones</a>
            <a href="https://digital-xen.com/servicios" class="text-slate-400 hover:text-[var(--color-acento)] transition-colors">Servicios</a>
            <a href="https://digital-xen.com/proyectos/" class="text-slate-400 hover:text-[var(--color-acento)] transition-colors">Proyectos</a>
            <a href="https://zonax.digital-xen.com" class="text-slate-400 hover:text-[var(--color-acento)] transition-colors">Zona X</a>
        </nav>
    </div>

</footer>