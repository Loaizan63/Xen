<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Xen Digital | Impulsa tu Presencia Digital</title>
    <link rel="icon" href="https://digital-xen.com/uploads/svg/XenB.svg" type="image/svg+xml" />

    <script src="https://css.digital-xen.com/tailwind/dist/output.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/main.js"></script>
        <script src="js/plus.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="https://css.digital-xen.com/tailwind/dist/output.css" rel="stylesheet">


</head>
<?php require_once './src/header.php'; ?>
<body class="bg-white text-[var(--color-texto-oscuro)] font-sans">

   

    <main>
        <section id="inicio" class="text-center py-24 px-4 bg-[var(--color-fondo-claro)]">
            <div class="max-w-3xl mx-auto flex flex-col gap-6 items-center">
                <h1 class="text-4xl md:text-5xl font-bold text-[var(--color-primario)]">Impulsa tu Negocio al Mundo
                    Digital</h1>
                <p class="text-lg md:text-xl text-slate-600">Soluciones web a la medida para que tu empresa crezca y
                    evolucione con tecnología.</p>
                <a href="#servicios"
                    class="inline-block bg-[var(--color-acento)] text-black font-bold px-8 py-3 rounded-lg hover:bg-[var(--color-acento-amarillo)] transition-transform hover:scale-105">Conoce
                    Nuestros Servicios</a>
            </div>
        </section>

        <section id="quienes" class="py-20 px-6 text-center">
            <div class="container mx-auto max-w-4xl">
                <h2 class="text-3xl md:text-4xl font-bold text-[var(--color-primario)] mb-6">¿Quiénes Somos?</h2>
                <p class="text-lg text-slate-700 leading-relaxed">
                    En <strong class="text-[var(--color-primario)]">Xen Digital</strong>, diseñamos, desarrollamos e
                    integramos plataformas digitales que impulsan a pymes y emprendedores en su transformación digital.
                    Automatizamos procesos, mejoramos la experiencia del cliente y fortalecemos tu presencia en
                    internet.
                </p>
            </div>
        </section>

        <section id="servicios" class="bg-[var(--color-fondo-claro)] py-20 px-6">
            <div class="container mx-auto max-w-7xl">
                <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">Nuestros Servicios</h2>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                    <article
                        class="bg-white rounded-xl shadow-lg p-8 border-t-4 border-blue-600 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Páginas Web 🌐</h3>
                            <p class="text-gray-600 mb-6">Sitios informativos para presentar tu marca, captar prospectos
                                y establecer tu presencia online.</p>
                            <ul class="space-y-4 mb-6">
                                <li class="flex items-center text-gray-800 pb-3 border-b border-gray-100"><svg
                                        class="w-6 h-6 text-blue-600 mr-3 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Sitio web institucional</li>
                                <li class="flex items-center text-gray-800 pb-3 border-b border-gray-100"><svg
                                        class="w-6 h-6 text-blue-600 mr-3 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Hosting y Dominio (.com)</li>
                                <li class="flex items-center text-gray-800"><svg
                                        class="w-6 h-6 text-blue-600 mr-3 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Soporte técnico</li>
                            </ul>
                        </div>
                        <div>
                            <button data-toggle="servicio1"
                                class="bg-[var(--color-acento-amarillo)] text-black font-bold mt-auto px-4 py-2 rounded hover:bg-[var(--color-acento)] w-full">Ver
                                Más</button>
                            <div id="servicio1"
                                class="transition-all duration-500 ease-in-out max-h-0 overflow-hidden text-left mt-4 text-sm">
                                <ul class="space-y-2 list-disc list-inside">
                                    <li><strong>Fundamentales:</strong> Dominio, Hosting Compartido, Certificado SSL.
                                    </li>
                                    <li><strong>Diseño y Desarrollo:</strong> UI/UX, Diseño Responsivo, Frontend,
                                        Implementación de CMS (WordPress).</li>
                                    <li><strong>Funcionalidades:</strong> Formulario de Contacto, Mapa, Galería, Blog,
                                        Redes Sociales.</li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-xl shadow-lg p-8 border-t-4 border-green-500 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Aplicaciones Web ⚙️</h3>
                            <p class="text-gray-600 mb-6">Sistemas interactivos con lógica de negocio y gestión de
                                usuarios para realizar tareas específicas.</p>
                            <ul class="space-y-4 mb-6">
                                <li class="flex items-center text-gray-800 pb-3 border-b border-gray-100"><svg
                                        class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Sistemas de Registro y Login</li>
                                <li class="flex items-center text-gray-800 pb-3 border-b border-gray-100"><svg
                                        class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Paneles de Control (Dashboards)</li>
                                <li class="flex items-center text-gray-800"><svg
                                        class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Procesamiento de Datos</li>
                            </ul>
                        </div>
                        <div>
                            <button data-toggle="servicio2"
                                class="bg-[var(--color-acento-amarillo)] text-black font-bold mt-auto px-4 py-2 rounded hover:bg-[var(--color-acento)] w-full">Ver
                                Más</button>
                            <div id="servicio2"
                                class="transition-all duration-500 ease-in-out max-h-0 overflow-hidden text-left mt-4 text-sm">
                                <ul class="space-y-2 list-disc list-inside">
                                    <li><strong>Fundamentales:</strong> Dominio, Hosting VPS/Cloud, Certificado SSL.
                                    </li>
                                    <li><strong>Diseño y Desarrollo:</strong> UI/UX Avanzado, Backend (PHP, Python),
                                        Frontend (React, Vue), Bases de Datos.</li>
                                    <li><strong>Funcionalidades:</strong> Login, Perfiles, Dashboards, CRUD, APIs, Roles
                                        y Permisos.</li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-xl shadow-lg p-8 border-t-4 border-purple-500 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Tienda Virtual 🛒</h3>
                            <p class="text-gray-600 mb-6">Plataformas de E-commerce enfocadas en la conversión y
                                seguridad para vender productos y servicios online.</p>
                            <ul class="space-y-4 mb-6">
                                <li class="flex items-center text-gray-800 pb-3 border-b border-gray-100"><svg
                                        class="w-6 h-6 text-purple-500 mr-3 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Catálogo de Productos y Carrito</li>
                                <li class="flex items-center text-gray-800 pb-3 border-b border-gray-100"><svg
                                        class="w-6 h-6 text-purple-500 mr-3 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Pasarelas de Pago Seguras</li>
                                <li class="flex items-center text-gray-800"><svg
                                        class="w-6 h-6 text-purple-500 mr-3 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Gestión de Inventario</li>
                            </ul>
                        </div>
                        <div>
                            <button data-toggle="servicio3"
                                class="bg-[var(--color-acento-amarillo)] text-black font-bold mt-auto px-4 py-2 rounded hover:bg-[var(--color-acento)] w-full">Ver
                                Más</button>
                            <div id="servicio3"
                                class="transition-all duration-500 ease-in-out max-h-0 overflow-hidden text-left mt-4 text-sm">
                                <ul class="space-y-2 list-disc list-inside">
                                    <li><strong>Fundamentales:</strong> Dominio, Hosting E-commerce, SSL.</li>
                                    <li><strong>Plataformas:</strong> WooCommerce, Shopify.</li>
                                    <li><strong>Funcionalidades:</strong> Catálogo, Carrito, Pagos (PayU, Mercado Pago),
                                        Inventario, Pedidos, Cuentas de Cliente.</li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-xl shadow-lg p-8 border-t-4 border-orange-500 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Automatización de Procesos 🤖</h3>
                            <p class="text-gray-600 mb-6">Agentes y flujos de trabajo inteligentes para optimizar tareas
                                repetitivas y mejorar la eficiencia de tu negocio.</p>
                            <ul class="space-y-4 mb-6">
                                <li class="flex items-center text-gray-800 pb-3 border-b border-gray-100"><svg
                                        class="w-6 h-6 text-orange-500 mr-3 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Agentes de servicio al cliente</li>
                                <li class="flex items-center text-gray-800 pb-3 border-b border-gray-100"><svg
                                        class="w-6 h-6 text-orange-500 mr-3 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Agentes de ventas o reservas</li>
                                <li class="flex items-center text-gray-800"><svg
                                        class="w-6 h-6 text-orange-500 mr-3 shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Respuestas automáticas</li>
                            </ul>
                        </div>
                        <div>
                            <button data-toggle="servicio4"
                                class="bg-[var(--color-acento-amarillo)] text-black font-bold mt-auto px-4 py-2 rounded hover:bg-[var(--color-acento)] w-full">Ver
                                Más</button>
                            <div id="servicio4"
                                class="transition-all duration-500 ease-in-out max-h-0 overflow-hidden text-left mt-4 text-sm">
                                <ul class="space-y-2 list-disc list-inside">
                                    <li><strong>Tecnología:</strong> Plataformas de automatización (n8n, Zapier, Make).
                                    </li>
                                    <li><strong>Canales de Integración:</strong> WhatsApp, Email, Instagram, Facebook,
                                        CRMs, y más.</li>
                                    <li><strong>Funcionalidades:</strong> Flujos de trabajo personalizados,
                                        Notificaciones en tiempo real, Sincronización de datos entre apps, Generación de
                                        reportes automáticos.</li>
                                </ul>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </section>

<section id="proyectos" class="relative bg-[var(--color-primario)] text-[var(--color-primario)]">

    <div class="absolute top-0 left-0 w-full overflow-hidden leading-[0px]">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" class="relative block w-full h-[80px]">
            <path fill="#f8fafc" d="M0,224L48,208C96,192,192,160,288,149.3C384,139,480,149,576,170.7C672,192,768,224,864,229.3C960,235,1056,213,1152,213.3C1248,213,1344,235,1392,245.3L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>
    </div>

    <div class="container mx-auto px-6 py-24 md:py-32 relative z-10  text-[var(--color-primario)]">
        <h2 class="text-3xl font-bold  p-2 mb-12 border-b-4 border-[var(--color-acento)] w-fit mx-auto mb-16 ">
            Proyectos Destacados
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 place-items-center">
            
            <article class="bg-white p-6 rounded-xl shadow-lg transition-transform hover:scale-105 text-gray-900 w-full max-w-sm">
                <img src="https://digital-xen.com/proyectos/igei/new/uploads/Logos%20Igei%20New/Logo%20simplificado/Logo%20Igei%20simplificado.svg"
                     alt="Logo Grupo Igei" class="h-20 mx-auto mb-4 object-contain" />
                <h3 class="text-xl font-bold text-[var(--color-primario)] mb-2">Grupo Igei</h3>
                <p class="text-sm text-slate-600 mb-4">Desarrollo de plataforma web para gestión de productividad y trabajo en línea.</p>
                <a href="#" class="font-bold text-[var(--color-primario)] hover:text-[var(--color-acento)] transition">
                    Ver más &rarr;
                </a>
            </article>
     <article class="bg-white p-6 rounded-xl shadow-lg transition-transform hover:scale-105 text-gray-900 w-full max-w-sm">
                <img src="https://digital-xen.com/proyectos/igei/new/uploads/Logos%20Igei%20New/Logo%20simplificado/Logo%20Igei%20simplificado.svg"
                     alt="Logo Grupo Igei" class="h-20 mx-auto mb-4 object-contain" />
                <h3 class="text-xl font-bold text-[var(--color-primario)] mb-2">Grupo Igei</h3>
                <p class="text-sm text-slate-600 mb-4">Desarrollo de plataforma web para gestión de productividad y trabajo en línea.</p>
                <a href="#" class="font-bold text-[var(--color-primario)] hover:text-[var(--color-acento)] transition">
                    Ver más &rarr;
                </a>
            </article>
                 <article class="bg-white p-6 rounded-xl shadow-lg transition-transform hover:scale-105 text-gray-900 w-full max-w-sm">
                <img src="https://digital-xen.com/proyectos/igei/new/uploads/Logos%20Igei%20New/Logo%20simplificado/Logo%20Igei%20simplificado.svg"
                     alt="Logo Grupo Igei" class="h-20 mx-auto mb-4 object-contain" />
                <h3 class="text-xl font-bold text-[var(--color-primario)] mb-2">Grupo Igei</h3>
                <p class="text-sm text-slate-600 mb-4">Desarrollo de plataforma web para gestión de productividad y trabajo en línea.</p>
                <a href="#" class="font-bold text-[var(--color-primario)] hover:text-[var(--color-acento)] transition">
                    Ver más &rarr;
                </a>
            </article>
            </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0px]">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" class="relative block w-full h-[100px]">
            <path fill="#f8fafc" d="M0,224L48,208C96,192,192,160,288,149.3C384,139,480,149,576,170.7C672,192,768,224,864,229.3C960,235,1056,213,1152,213.3C1248,213,1344,235,1392,245.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

        <div id="planes" class="bg-[var(--color-fondo-claro)] pt-20 pb-20 px-6 text-center -mt-24">
            <h2 class="text-3xl font-bold text-[var(--color-primario)] p-2 mb-4 w-fit mx-auto">Planes de Servicio</h2>

            <div class="flex justify-center items-center gap-4 mb-4">
                <span class="font-semibold">Mensual</span>
                <label class="relative inline-block w-12 h-6 cursor-pointer"><input type="checkbox" id="billingToggle"
                        class="peer opacity-0 w-0 h-0" /><span
                        class="absolute inset-0 bg-gray-300 rounded-full transition peer-checked:bg-blue-500"></span><span
                        class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition-transform peer-checked:translate-x-6"></span></label>
                <span class="font-semibold">Anual</span>
            </div>
            <p id="discount-message" class="text-[#f3ca24] font-bold mb-8 hidden text-center">20% de Descuento con Pago
                Anual</p>

            <div class="flex flex-wrap gap-8 justify-center">
                <article
                    class="bg-white w-full max-w-sm p-8 rounded-xl shadow-lg hover:shadow-2xl transition text-left">
                    <h3 class="text-xl font-bold text-[var(--color-primario)] mb-2">Plan Basic</h3>
                    <p class="text-slate-600">Ideal para emprendedores que desean establecer su imagen digital.</p>
                    <p class="font-bold text-3xl text-[var(--color-primario)] my-4 price" data-monthly="52000"
                        data-annual="500000"></p>
                    <p id="saving-basic" class="text-green-600 font-semibold h-6 mb-4 transition-opacity opacity-0"></p>
                    <button data-toggle="plan1-details" class="font-bold text-blue-600">Ver detalles</button>
                    <ul id="plan1-details"
                        class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden text-left list-disc list-inside mt-3">
                        <li>Sitio web institucional</li>
                        <li>Hosting y Dominio (1 año)</li>
                        <li>Soporte técnico</li>
                    </ul>
                </article>
                <article
                    class="bg-white w-full max-w-sm p-8 rounded-xl shadow-lg hover:shadow-2xl transition text-left">
                    <h3 class="text-xl font-bold text-[var(--color-primario)] mb-2">Plan Ecommerce</h3>
                    <p class="text-slate-600">Para empresas que necesitan una plataforma robusta para ventas online.</p>
                    <p class="font-bold text-3xl text-[var(--color-primario)] my-4 price" data-monthly="156300"
                        data-annual="1500000"></p>
                    <p id="saving-ecommerce" class="text-green-600 font-semibold h-6 mb-4 transition-opacity opacity-0">
                    </p>
                    <button data-toggle="plan2-details" class="font-bold text-blue-600">Ver detalles</button>
                    <ul id="plan2-details"
                        class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden text-left list-disc list-inside mt-3">
                        <li>Todo lo del Plan Basic</li>
                        <li>Tienda en línea</li>
                        <li>Pasarelas de pago</li>
                        <li>Gestión de inventario</li>
                    </ul>
                </article>
                <article
                    class="bg-white w-full max-w-sm p-8 rounded-xl shadow-lg hover:shadow-2xl transition text-left">
                    <h3 class="text-xl font-bold text-[var(--color-primario)] mb-2">Plan PYMES</h3>
                    <p class="text-slate-600">Soluciones avanzadas, integraciones y alta escalabilidad.</p>
                    <p class="font-bold text-3xl text-[var(--color-primario)] my-4 price" data-monthly="260500"
                        data-annual="2500000"></p>
                    <p id="saving-pymes" class="text-green-600 font-semibold h-6 mb-4 transition-opacity opacity-0"></p>
                    <button data-toggle="plan3-details" class="font-bold text-blue-600">Ver detalles</button>
                    <ul id="plan3-details"
                        class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden text-left list-disc list-inside mt-3">
                        <li>Todo lo de Ecommerce</li>
                        <li>CRM o Dashboard</li>
                        <li>Integraciones avanzadas</li>
                        <li>Soporte prioritario</li>
                    </ul>
                </article>
            </div>
        </div>
        </section>
 
</section>
<section id="faq" class="relative bg-white h-[100px]">
 <div class="container mx-auto max-w-3xl px-6  py-24 md:py-32 relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[var(--color-primario)]">Preguntas Frecuentes</h2>
            <p class="text-lg text-slate-600 mt-4">¿Tienes dudas? Aquí resolvemos las más comunes.</p>
        </div>

        <div id="accordion-container" class="space-y-4">

            <div class="faq-item border-b border-gray-200 pb-4">
                <h2>
                    <button type="button" 
                            class="faq-toggle flex justify-between items-center w-full text-left font-semibold text-lg text-gray-800 py-4" 
                            aria-expanded="false" 
                            aria-controls="faq-answer-1">
                        <span>¿Qué necesito para empezar a trabajar con ustedes?</span>
                        <svg class="faq-icon w-5 h-5 shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </h2>
                <div id="faq-answer-1" 
                     class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <div class="p-4 text-slate-600">
                        <p>¡Es muy simple! El primer paso es agendar una reunión inicial (sin costo) a través de nuestro formulario de contacto. En esta llamada, conversaremos sobre tu proyecto, tus objetivos y cómo podemos ayudarte. A partir de ahí, te enviaremos una propuesta detallada.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item border-b border-gray-200 pb-4">
                <h2>
                    <button type="button" 
                            class="faq-toggle flex justify-between items-center w-full text-left font-semibold text-lg text-gray-800 py-4" 
                            aria-expanded="false" 
                            aria-controls="faq-answer-2">
                        <span>¿Cuánto tiempo tarda en desarrollarse una página web?</span>
                        <svg class="faq-icon w-5 h-5 shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </h2>
                <div id="faq-answer-2" 
                     class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <div class="p-4 text-slate-600">
                        <p>El tiempo de desarrollo varía según la complejidad del proyecto. Una página web informativa (Plan Basic) puede tomar entre 2 y 4 semanas. Un E-commerce o una aplicación web a medida (Planes Ecommerce o PYMES) puede requerir de 6 a 12 semanas o más. Siempre te daremos un cronograma detallado en nuestra propuesta.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item border-b border-gray-200 pb-4">
                <h2>
                    <button type="button" 
                            class="faq-toggle flex justify-between items-center w-full text-left font-semibold text-lg text-gray-800 py-4" 
                            aria-expanded="false" 
                            aria-controls="faq-answer-3">
                        <span>¿Ofrecen soporte técnico después de entregar el proyecto?</span>
                        <svg class="faq-icon w-5 h-5 shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </h2>
                <div id="faq-answer-3" 
                     class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <div class="p-4 text-slate-600">
                        <p>Sí, absolutamente. Todos nuestros planes incluyen un período de soporte técnico para resolver cualquier error o duda. Además, ofrecemos planes de mantenimiento mensual o anual para asegurar que tu sitio esté siempre actualizado, seguro y funcionando a la perfección.</p>
                    </div>
                </div>
            </div>
                    <div class="faq-item border-b border-gray-200 pb-4">
                <h2>
                    <button type="button" 
                            class="faq-toggle flex justify-between items-center w-full text-left font-semibold text-lg text-gray-800 py-4" 
                            aria-expanded="false" 
                            aria-controls="faq-answer-4">
                        <span>¿Qué metodos de pago manejan?</span>
                        <svg class="faq-icon w-5 h-5 shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </h2>
                <div id="faq-answer-4" 
                     class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <div class="p-4 text-slate-600">
                        <p>Manejamos varios metodos de pago que varian según tu tipo de subscripción.</p>
                    </div>
                </div>
                
            </div>

        </div>
    </div>

<?php require_once './src/footer.php'; ?>
</section>
</main>

</body>
</html>