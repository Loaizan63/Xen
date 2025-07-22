  // Mostrar precios según facturación
  function formatPrice(value) {
    return new Intl.NumberFormat('es-CO', {
      style: 'currency',
      currency: 'COP',
      maximumFractionDigits: 0
    }).format(value);
  }

  function toggleBilling() {
    const isAnnual = document.getElementById('billingToggle')?.checked;

    document.querySelectorAll('.price').forEach(p => {
      const monthly = parseInt(p.dataset.monthly || 0);
      const annual = parseInt(p.dataset.annual || 0);
      const amount = isAnnual ? annual : monthly;
      const label = isAnnual ? "/ año" : "/ mes";
      p.textContent = formatPrice(amount) + ' ' + label;
    });

    // Mostrar u ocultar ahorro
    const savingIds = ['saving-basic', 'saving-ecommerce', 'saving-pymes'];
    savingIds.forEach(id => {
      const el = document.getElementById(id);
      if (el) el.style.display = isAnnual ? 'block' : 'none';
    });
  }

  // Ejecutar al cargar
  document.addEventListener("DOMContentLoaded", () => {
    toggleBilling();

    // Toggle menú responsivo
    const toggle = document.getElementById('menuToggle');
    const nav = document.getElementById('navMenu');
    if (toggle && nav) {
      toggle.addEventListener('click', () => {
        const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
        toggle.setAttribute('aria-expanded', !isExpanded);
        nav.classList.toggle('hidden');
        nav.classList.toggle('flex');
        nav.classList.toggle('flex-col');
      });
    }

    // Envío del formulario
    const form = document.getElementById("contactForm");
    const respuesta = document.getElementById("respuesta");
    const btn = document.getElementById('btnEnviar');
    const btnText = document.getElementById('btnText');
    const spinner = document.getElementById('spinner');

    if (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();

        if (btn) {
          btn.disabled = true;
          btnText.textContent = 'Enviando...';
          spinner?.classList.remove('hidden');
        }

        const formData = new FormData(this);

        fetch("function.php", {
          method: "POST",
          body: formData,
        })
          .then(res => res.json())
          .then(data => {
            if (respuesta) respuesta.textContent = data.message;

            if (data.success) form.reset();
            if (btn) {
              btn.disabled = false;
              btnText.textContent = 'Enviar';
              spinner?.classList.add('hidden');
            }
          })
          .catch(() => {
            if (respuesta) respuesta.textContent = "Ocurrió un error al procesar el formulario.";
            if (btn) {
              btn.disabled = false;
              btnText.textContent = 'Enviar';
              spinner?.classList.add('hidden');
            }
          });
      });
    }

    // Toggle de facturación
    const billingToggle = document.getElementById('billingToggle');
    if (billingToggle) {
      billingToggle.addEventListener('change', toggleBilling);
    }
  });

document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('[data-toggle]').forEach(btn => {
    btn.addEventListener('click', () => {
      const id = btn.getAttribute('data-toggle');
      const menu = document.getElementById(id);

      if (menu) {
        const isVisible = menu.classList.contains('max-h-[500px]');
        menu.classList.toggle('max-h-0', isVisible);
        menu.classList.toggle('max-h-[500px]', !isVisible);
      }
    });
  });
});
