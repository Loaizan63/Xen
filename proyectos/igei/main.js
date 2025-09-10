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
  if (header) {
    header.classList.toggle('sticky', window.scrollY > 50);
  }
});

// === Validación del formulario ===
const form = document.querySelector('form');
if (form) {
  form.addEventListener('submit', (e) => {
    const nombre = document.getElementById('nombre')?.value.trim();
    const correo = document.getElementById('correo')?.value.trim();
    const mensaje = document.getElementById('mensaje')?.value.trim();

    const camposFaltantes = [];
    if (!nombre) camposFaltantes.push("Nombre");
    if (!correo) camposFaltantes.push("Correo");
    if (!mensaje) camposFaltantes.push("Mensaje");

    if (camposFaltantes.length > 0) {
      e.preventDefault();
      alert(`Por favor completa los siguientes campos: ${camposFaltantes.join(', ')}`);
    }
  });
}

// === Al cargar DOM ===
document.addEventListener("DOMContentLoaded", () => {

  // === Carrusel de Proyectos ===
  const carrusel = document.getElementById("proyectosCarrusel");
  const btnPrev = document.getElementById("anteriorProyecto");
  const btnNext = document.getElementById("siguienteProyecto");

  if (carrusel && btnPrev && btnNext) {
    let scrollIndex = 0;
    const visibles = 3;
    const totalTarjetas = carrusel.querySelectorAll(".proyecto").length;
    let autoScroll;

    function getTarjetaAncho() {
      return carrusel.querySelector('.proyecto')?.offsetWidth || 330;
    }

    function actualizarIndicadores() {
      const indicadores = document.querySelectorAll(".indicador");
      indicadores.forEach((dot, i) => {
        dot.classList.toggle("activo", i === scrollIndex);
      });
    }

    function scrollToIndex(i) {
      const tarjetaAncho = getTarjetaAncho();
      const maxIndex = Math.ceil(totalTarjetas / visibles) - 1;
      scrollIndex = Math.max(0, Math.min(i, maxIndex));
      carrusel.scrollTo({
        left: scrollIndex * tarjetaAncho,
        behavior: "smooth"
      });
      actualizarIndicadores();
    }

    btnPrev.addEventListener("click", () => scrollToIndex(scrollIndex - 1));
    btnNext.addEventListener("click", () => scrollToIndex(scrollIndex + 1));

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

    autoScroll = setInterval(() => {
      const next = (scrollIndex + 1) % totalPags;
      scrollToIndex(next);
    }, 5000);

    // Detener autoScroll si se interactúa manualmente (opcional)
    carrusel.addEventListener('wheel', () => clearInterval(autoScroll), { once: true });
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

  // === Menú responsive ===
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav-menu");

  if (hamburger && navMenu) {
    hamburger.addEventListener("click", () => {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("active");
    });

    document.querySelectorAll(".nav-link").forEach(n => {
      n.addEventListener("click", () => {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
      });
    });
  }

  // === Botón "Volver al inicio" ===
  const backToTop = document.createElement('button');
  backToTop.innerHTML = '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 4l-8 8h6v8h4v-8h6z"/></svg>';
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
