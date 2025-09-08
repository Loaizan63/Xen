document.addEventListener('DOMContentLoaded', () => {

    /**
     * Función principal que inicializa todos los componentes interactivos.
     */
    function init() {
        setupMobileMenu();
        setupAccordions();
        setupPriceToggle();
        setupContactForm();
    }

    /**
     * Configura la lógica del menú de navegación móvil.
     * Incluye el cambio de ícono (hamburguesa/X) y el cierre al hacer clic en un enlace.
     */
function setupMobileMenu() {
    const menuToggle = document.getElementById('menuToggle');
    if (!menuToggle) return;

    const navMenuMobile = document.getElementById('navMenuMobile');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    menuToggle.addEventListener('click', () => {
        const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
        menuToggle.setAttribute('aria-expanded', !isExpanded);
        
        // Animación del ícono hamburguesa -> X
        menuToggle.classList.toggle('menu-open');
        
        // Lógica corregida para alternar la visibilidad y posición del menú
        navMenuMobile.classList.toggle('opacity-0');
        navMenuMobile.classList.toggle('-translate-y-4');
        navMenuMobile.classList.toggle('pointer-events-none');
    });

    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
             // Solo simula el clic si el menú está abierto
            if (menuToggle.classList.contains('menu-open')) {
                menuToggle.click();
            }
        });
    });
}

    /**
     * Configura todos los elementos de tipo acordeón/toggle.
     * Usa scrollHeight para una altura dinámica y precisa.
     */
    function setupAccordions() {
        document.querySelectorAll('[data-toggle]').forEach(button => {
            button.addEventListener('click', () => {
                const targetId = button.getAttribute('data-toggle');
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    if (targetElement.style.maxHeight) {
                        targetElement.style.maxHeight = null;
                    } else {
                        targetElement.style.maxHeight = targetElement.scrollHeight + "px";
                    }
                }
            });
        });
    }

    /**
     * Configura el interruptor de precios Mensual/Anual.
     * Calcula y muestra el ahorro dinámicamente.
     */
    function setupPriceToggle() {
        const billingToggle = document.getElementById('billingToggle');
        if (!billingToggle) return;

        const currencyFormatter = new Intl.NumberFormat('es-CO', { style: 'currency', currency: 'COP', minimumFractionDigits: 0 });

        const updatePrices = () => {
            const isAnnual = billingToggle.checked;
            document.getElementById('discount-message').style.opacity = isAnnual ? '1' : '0';

            document.querySelectorAll('.price').forEach(priceEl => {
                const monthly = parseFloat(priceEl.dataset.monthly);
                const annual = parseFloat(priceEl.dataset.annual);
                
                priceEl.textContent = isAnnual ? `${currencyFormatter.format(annual)}/año` : `${currencyFormatter.format(monthly)}/mes`;
                
                // Buscar elemento de ahorro correspondiente de forma más robusta
                const planCard = priceEl.closest('article');
                const savingEl = planCard ? planCard.querySelector('[id^="saving-"]') : null;

                if (savingEl) {
                    const savings = (monthly * 12) - annual;
                    if (savings > 0) {
                        savingEl.textContent = `¡Ahorra ${currencyFormatter.format(savings)} al año!`;
                        savingEl.style.opacity = isAnnual ? '1' : '0';
                    }
                }
            });
        };

        billingToggle.addEventListener('change', updatePrices);
        updatePrices(); // Llamada inicial para establecer los precios al cargar
    }

    /**
     * Configura el envío del formulario de contacto con fetch.
     * Usa .finally() para evitar repetir código.
     */
    function setupContactForm() {
        const form = document.getElementById("contactForm");
        if (!form) return;

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            const btn = document.getElementById('btnEnviar');
            const btnText = document.getElementById('btnText');
            const spinner = document.getElementById('spinner');

            btn.disabled = true;
            btnText.textContent = 'Enviando...';
            spinner.classList.remove('hidden');

            fetch("function.php", {
                method: "POST",
                body: new FormData(this),
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    form.reset();
                    Swal.fire({ icon: 'success', title: '¡Envío exitoso!', text: data.message });
                } else {
                    Swal.fire({ icon: 'error', title: 'Error', text: data.message });
                }
            })
            .catch(() => {
                Swal.fire({ icon: 'error', title: 'Error de Conexión', text: 'No se pudo procesar la solicitud. Intenta más tarde.' });
            })
            .finally(() => {
                // Se ejecuta siempre, al final de la promesa (éxito o error)
                btn.disabled = false;
                btnText.textContent = 'Enviar Mensaje';
                spinner.classList.add('hidden');
            });
        });
    }

    // Ejecutar la función principal para inicializar todo
    init();
});