    function toggleMenu(id) {
      const menu = document.getElementById(id);
      menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
    }
function formatPrice(value) {
  return new Intl.NumberFormat('es-CO', {
    style: 'currency',
    currency: 'COP',
    maximumFractionDigits: 0
  }).format(value);
}

function toggleBilling() {
  const isAnnual = document.getElementById('billingToggle').checked;

  document.querySelectorAll('.price').forEach(p => {
    const monthly = parseInt(p.dataset.monthly);
    const annual = parseInt(p.dataset.annual);
    const amount = isAnnual ? annual : monthly;
    const label = isAnnual ? "/ año" : "/ mes";
    p.textContent = formatPrice(amount) + ' ' + label;
  });

  // Mostrar u ocultar ahorro
  document.getElementById('saving-basic').style.display = isAnnual ? 'block' : 'none';
  document.getElementById('saving-ecommerce').style.display = isAnnual ? 'block' : 'none';
  document.getElementById('saving-pymes').style.display = isAnnual ? 'block' : 'none';
}

// Mostrar ahorro por defecto al cargar
window.addEventListener('DOMContentLoaded', toggleBilling);