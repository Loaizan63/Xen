// === Scroll suave ===
document.querySelectorAll('nav a').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    const destino = document.querySelector(link.getAttribute('href'));
    if (destino) {
      destino.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

// === Sticky Header ===
window.addEventListener('scroll', () => {
  const header = document.querySelector('header');
  header.classList.toggle('sticky', window.scrollY > 50);
});

// === Validación del formulario ===
const form = document.querySelector('form');
if (form) {
  form.addEventListener('submit', (e) => {
    const nombre = document.getElementById('nombre').value.trim();
    const correo = document.getElementById('correo').value.trim();
    const mensaje = document.getElementById('mensaje').value.trim();

    if (!nombre || !correo || !mensaje) {
      e.preventDefault();
      alert('Por favor completa todos los campos antes de enviar el formulario.');
    }
  });
}
document.addEventListener("DOMContentLoaded", () => {
  // === Carrusel de Proyectos ===
  const carrusel = document.getElementById("proyectosCarrusel");
  const btnPrev = document.getElementById("anteriorProyecto");
  const btnNext = document.getElementById("siguienteProyecto");

  let scrollIndex = 0;
  const tarjetaAncho = 330; // Ajusta según diseño real
  const totalTarjetas = carrusel ? carrusel.querySelectorAll(".proyecto").length : 0;
  const visibles = 3;
  let autoScroll;

  function actualizarIndicadores() {
    const indicadores = document.querySelectorAll(".indicador");
    indicadores.forEach((dot, i) => {
      dot.classList.toggle("activo", i === scrollIndex);
    });
  }

  function scrollToIndex(i) {
    if (!carrusel) return;
    const maxIndex = Math.ceil(totalTarjetas / visibles) - 1;
    scrollIndex = Math.max(0, Math.min(i, maxIndex));
    carrusel.scrollTo({
      left: scrollIndex * tarjetaAncho,
      behavior: "smooth",
    });
    actualizarIndicadores();
  }

  if (btnPrev && btnNext && carrusel) {
    btnPrev.addEventListener("click", () => {
      scrollToIndex(scrollIndex - 1);
    });

    btnNext.addEventListener("click", () => {
      scrollToIndex(scrollIndex + 1);
    });

    // === Indicadores ===
    const contenedorIndicadores = document.createElement("div");
    contenedorIndicadores.className = "indicadores";
    const totalPags = Math.ceil(totalTarjetas / visibles);
    for (let i = 0; i < totalPags; i++) {
      const dot = document.createElement("span");
      dot.className = "indicador";
      if (i === 0) dot.classList.add("activo");
      dot.addEventListener("click", () => scrollToIndex(i));
      contenedorIndicadores.appendChild(dot);
    }
    carrusel.parentElement.appendChild(contenedorIndicadores);

    // === Carrusel automático ===
    autoScroll = setInterval(() => {
      const next = (scrollIndex + 1) % totalPags;
      scrollToIndex(next);
    }, 5000); // cada 5 segundos
  }

  // === Botón de WhatsApp flotante ===
  const whatsappBtn = document.getElementById("whatsapp-btn");
  if (whatsappBtn) {
    Object.assign(whatsappBtn.style, {
      position: "fixed",
      bottom: "20px",
      right: "20px",
      width: "50px",
      height: "50px",
      zIndex: "1000"
    });
  }
// Menú responsive
const menuToggle = document.getElementById("mobile-menu");
const navList = document.querySelector(".nav-list");

menuToggle.addEventListener("click", () => {
  navList.classList.toggle("active");
});

  // === Botón "Volver al inicio" ===
  const backToTop = document.createElement('button');
  backToTop.textContent = '↑ Inicio';
  backToTop.id = 'backToTop';
  Object.assign(backToTop.style, {
    position: 'fixed',
    bottom: '80px',
    right: '20px',
    padding: '10px 15px',
    backgroundColor: '#20496A',
    color: '#fff',
    border: 'none',
    borderRadius: '6px',
    cursor: 'pointer',
    display: 'none',
    zIndex: '999',
    fontSize: '14px'
  });
  document.body.appendChild(backToTop);

  window.addEventListener('scroll', () => {
    backToTop.style.display = window.scrollY > 300 ? 'block' : 'none';
  });

  backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
});
