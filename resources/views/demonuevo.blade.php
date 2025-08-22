<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>TatsuBot - Tu Asistente Virtual Inteligente</title>
    <meta name="description"
        content="TatsuBot automatiza la atención de tu negocio: responde consultas, muestra tu catálogo y convierte visitas en ventas.">

    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicontatsubot.ico" type="image/x-icon">

    <!-- Open Graph (redes sociales) -->
    <meta property="og:title" content="TatsuBot - Tu Asistente Virtual Inteligente">
    <meta property="og:description"
        content="Automatizá la atención de tu negocio con TatsuBot. Tu tienda disponible 24/7 para responder, vender y sorprender.">
    <meta property="og:image" content="https://tatsubot.site/assets/images/gallery/whatsapp-conversacion.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="https://tatsubot.site">
    <meta property="og:type" content="website">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <!-- Bootstrap 5 y jQuery ya están en tu archivo, solo agregamos el CSS extra -->
    <link href="https://cdn.jsdelivr.net/npm/@n8n/chat/dist/style.css" rel="stylesheet" />
    
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }
        
        .bot-box {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        .bot-box img {
            width: 100%;
            height: auto;
            /* mantiene proporción natural */
            max-height: 450px;
            /* tope en pantallas grandes */
            object-fit: cover;
            min-height: 350px;
            /* recorta si sobra */
            /* opcional, para estética */
        }
        
        
        .bot-box img {
            transition: transform 0.3s ease;
        }
        
        .bot-box:hover img {
            transform: scale(1.05);
        }
        
        .bot-box .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
            padding: 1rem;
            border-radius: 12px;
        }
        
        .bot-box:hover .overlay {
            opacity: 1;
        }
        
        .overlay h5,
        .overlay p {
            color: #fff;
        }
        
        iframe {
            border-radius: 8px;
        }
        
        @media (max-width: 768px) {
            .bot-box .overlay {
                opacity: 1;
                position: relative;
                background: rgba(0, 0, 0, 0.6);
                margin-top: -1rem;
                border-radius: 0 0 12px 12px;
            }
        }
        
        /* Estilos para ventana lateral móvil */
        .mobile-chat-sidebar {
            position: fixed;
            top: 0;
            right: -100%;
            width: 100%;
            height: 100vh;
            background: #fff;
            z-index: 10000;
            transition: right 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        
        .mobile-chat-sidebar.open {
            right: 0;
        }
        
        .mobile-chat-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background: #4a0f6f;
            color: white;
            border-bottom: 1px solid #ddd;
        }
        
        .mobile-chat-header h5 {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 600;
        }
        
        .mobile-chat-close {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 50%;
            transition: background-color 0.2s ease;
        }
        
        .mobile-chat-close:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .mobile-chat-content {
            flex: 1;
            overflow: hidden;
        }
        
        .mobile-chat-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }
        
        .mobile-chat-overlay.open {
            opacity: 1;
            visibility: visible;
        }
        
        /* Ocultar iframes de chat en móvil */
        @media (max-width: 768px) {
            
            #chat-tienda,
            #chat-estetica {
                display: none !important;
            }
            
        }
    </style>
    <style>
        .chat-window-wrapper .chat-window-toggle {
            background: #4a0f6f;
        }
        
        .chat-window-wrapper .chat-window-toggle:hover {
            background: #4a0f6f;
        }
        
        .chat-header {
            background: #4a0f6f !important;
        }
        
        .chat-window {
            border-radius: 25px !important;
        }
        
        .scroll-top.open,
        .scroll-top.style-two {
            left: 25px !important;
            background: #4a0f6f !important;
        }
        
        .chat-message.chat-message-from-user:not(.chat-message-transparent) {
            border-radius: 20px 20px 0px 20px !important;
        }
        
        .chat-message.chat-message-from-bot:not(.chat-message-transparent) {
            border-radius: 20px 20px 20px 0px !important;
            background-color: #c2ecf0;
        }
        
        .chat-layout .chat-body {
            background-image: url(https://vgroup-content.vgroup.cl/2025/07/28/tsbt.png);
            background-repeat: repeat;
        }
        
        .chat-window-wrapper {
            position: fixed !important;
            left: 25px !important;
            bottom: 25px !important;
            justify-content: flex-start !important;
            z-index: 9999;
        }
        
        .chat-window-toggle {
            margin-left: 0px !important;
        }
        </style>
    <style>
        #chat-left .chat-window-wrapper {
            left: 25px !important;
            right: auto !important;
            justify-content: flex-start !important;
        }
        
        #chat-right .chat-window-wrapper {
            right: 25px !important;
            left: auto !important;
            bottom: 25px !important;
            justify-content: flex-end !important;
        }
        
        .chat-window-wrapper {
            position: fixed !important;
            bottom: 25px !important;
            z-index: 9999;
        }
        
        .chat-window-toggle {
            margin-left: 0 !important;
        }
        
        .container-custom {
            min-height: calc(100svh - var(--header-h));
            /* svh = viewport estable */
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* centra verticalmente todo */
            padding-block: 2rem;
            /* respiración */
        }
        
        :root {
            --header-h: 115px;
            /* si tu header cambia en laptop, ajusta aquí o con media queries */
        }
        #mobile-chat-title{
            color: #fff !important;
        }
    </style>
<link href="assets/css/responsive.css" rel="stylesheet">

<link href="./assets/css/style-v2.css" rel="stylesheet">

</head>




<!-- page wrapper -->

<body>
    <!-- Modal del formulario limpio -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content" style="background: none; border: none;">
                <div class="modal-body p-0">
                    <iframe src="https://tatsubot.makenafundas.com.ar/form/contactame" width="100%" height="700"
                        style="border:none; overflow:auto; display:block;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>


    <div class="boxed_wrapper">





        <!-- main header -->
        <header class="main-header header-style-six">
            <!-- header-lower -->
            <div class="header-lower">
              <div class="auto-container">
                <div class="outer-box clearfix">
                  <div class="logo-box pull-left">
                    <figure style="width: 180px; height: auto;" class="logo">
                      <a href="/"><img src="assets/images/logo-tatsu-white.png" alt=""></a>
                    </figure>
                  </div>
          
                  <div class="menu-area pull-right clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                      <i class="icon-bar"></i>
                      <i class="icon-bar"></i>
                      <i class="icon-bar"></i>
                    </div>
          
                    <nav class="main-menu navbar-expand-md navbar-light">
                      <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                          <li><a href="#home">Home</a></li>
                          <li><a href="#beneficios">Beneficios</a></li>
                          <li><a href="#como-funciona">Cómo funciona</a></li>
                          <li><a href="#precios">Precios</a></li>
                          <li><a href="#testimonios">Testimonios</a></li>
                        </ul>
                      </div>
                    </nav>
          
                    <div class="nav-right-content clearfix">
                      <div class="btn-box d-none d-lg-inline-flex align-items-center gap-2">
                        <a href="#" class="theme-btn btn-ten" data-bs-toggle="modal" data-bs-target="#formModal">Contactame</a>
                        <a href="{{ route('login') }}" class="theme-btn btn-eight ml-2">
                          Ingresar <i class="fas fa-sign-in-alt"></i>
                        </a>
                      </div>
                    </div>
          
                  </div>
                </div>
              </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="/"><img src="assets/images/logo-tatsu-white.png" alt=""
                            title=""></a></div>

                <div class="mobile-quick-actions my-3 d-flex align-items-center">
                    <a href="#" class="theme-btn btn-ten btn-mobile-mini me-2" data-bs-toggle="modal"
                        data-bs-target="#formModal">Contactame</a>
                    <a href="{{ route('login') }}" class="theme-btn btn-eight btn-mobile-mini">Ingresar <i
                            class="fas fa-sign-in-alt"></i></a>
                </div>

                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Informacion de Contacto</h4>
                    <ul>

                        <li><a href="">+569 6765 6673</a></li>
                        <li><a href="mailto:tatsubot@gmail.com">tatsubot@gmail.com</a></li>

                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">

                        <li><a href="https://wa.me/56967656673?text=Hola,%20quiero%20ver%20una%20demonstración%20de%20TatsuBot."
                                target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                        <li><a href="https://www.instagram.com/tatsuweb?igsh=MWR2ZXM0emozcnN4NQ=="><span
                                    class="fab fa-instagram"></span></a></li>

                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->



        <div class="container container-custom py-5">
            <h1 class="text-center fw-medium mb-2">Prueba nuestros asistentes inteligentes</h1>
            <p class="text-center mb-4">Explora cómo funcionan nuestros asistentes inteligentes: simulan conversaciones
                reales tal como lo harían en WhatsApp o Instagram.</p>
            <div class="row g-5">
                <!-- BOT 1: Tienda Deportiva -->
                <div class="col-md-6">
                    <div class="bot-box">
                        <img src="/assets/images/tienda-deportiva.png" alt="Bot Tienda Deportiva">

                        <div class="overlay d-flex flex-column justify-content-center align-items-center text-center">
                            <h5 class="fw-bold mb-2">Asistente Tienda Deportiva</h5>
                            <p class="small">Consulta horarios, dirección, formas de pago o pide el catálogo de
                                productos.</p>
                            <button class="theme-btn btn-ten mt-3" onclick="abrirChat('tienda')">Probar bot</button>
                        </div>
                    </div>
                </div>

                <!-- BOT 2: Centro Estético -->
                <div class="col-md-6">
                    <div class="bot-box">
                        <img src="assets/images/estetica-imagen.png" alt="Asistente Centro Estético">
                        <div class="overlay d-flex flex-column justify-content-center align-items-center text-center">
                            <h5 class="fw-bold mb-2">Asistente Centro Estético</h5>
                            <p class="small">Agenda horas, consulta servicios o promociones activas.</p>
                            <button class="theme-btn btn-ten mt-3" onclick="abrirChat('estetica')">Probar bot</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Chats fijos -->
        <iframe id="chat-tienda" src="/chat-tienda.html"
            style="position: fixed; bottom: 5px; left: 25px; width: 360px; height: 600px; border: none; z-index: 2000;">
        </iframe>

        <iframe id="chat-estetica" src="/chat-estetica.html"
            style="position: fixed; bottom: 5px; right: 25px; width: 360px; height: 600px; border: none; z-index: 2000;">
        </iframe>

        <!-- Ventana lateral móvil para chats -->
        <div id="mobile-chat-sidebar" class="mobile-chat-sidebar">
            <div class="mobile-chat-header">
                <h5 id="mobile-chat-title">Chat</h5>
                <button class="mobile-chat-close" onclick="cerrarVentanaLateral()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="mobile-chat-content">
                <iframe id="mobile-chat-iframe" src=""
                    style="width: 100%; height: 100%; border: none;"></iframe>
            </div>
        </div>
        <div id="mobile-chat-overlay" class="mobile-chat-overlay" onclick="cerrarVentanaLateral()"></div>
































        <!-- main-footer -->
        <footer class="main-footer footer-style-six">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-60.png);"></div>
            <div class="auto-container">
                <div class="footer-top-two">
                    <div class="row clearfix">
                        <!-- Demo -->
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="text">
                                    <h3>Ver Demo</h3>
                                    <p>Prueba como funcionan nuestros asistentes inteligentes</p>
                                </div>
                                <div class="btn-box ">
                                    <a href="/demo" class="theme-btn btn-ten">
                                        Ver demo
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Enlaces -->
                        <div class="col-lg-5 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Enlaces útiles</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="/#beneficios">Beneficios</a></li>
                                        <li><a href="/#como-funciona">¿Cómo funciona?</a></li>
                                        <li><a href="/#precios">Precios</a></li>
                                        <li><a href="/#testimonios">Testimonios</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Contacto -->
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contacto</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">

                                        <li>
                                            <h4>Teléfono</h4>
                                            <p><a href="">+56 9 67656673</a></p>
                                        </li>
                                        <li>
                                            <h4>Email</h4>
                                            <p><a href="mailto:tatsubot@gmail.com">tatsubot@gmail.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Newsletter -->

                    </div>
                </div>
                <!-- Pie -->
                <div class="footer-bottom">
                    <div class="bottom-inner">
                        <figure class="footer-logo"><a href="#"><img src="assets/images/logo-tatsu-white.png"
                                    alt="Logo"></a></figure>
                        <div class="copyright">
                            <p>&copy; 2025 <a href="#">TatsuBot</a>. Todos los derechos reservados.</p>
                        </div>
                        <ul class="social-links clearfix">
                            <li><a href="https://www.instagram.com/tatsuweb?igsh=MWR2ZXM0emozcnN4NQ=="><i
                                        class="fab fa-instagram"></i></a></li>
                            <li><a href="https://wa.me/56967656673?text=Hola,%20quiero%20ver%20una%20demonstración%20de%20TatsuBot."
                                    target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- main-footer end -->


        <!-- scroll to top -->
        


    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/tilt.jquery.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/bxslider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $(".client-testimonial-carousel").owlCarousel({
                items: 1, // Un solo testimonio a la vez
                loop: true, // Repite infinito
                autoplay: true, // Cambia automáticamente
                autoplayTimeout: 5000, // Tiempo entre slides
                autoplayHoverPause: true, // Pausa si se pasa el mouse encima
                smartSpeed: 600, // Suavidad en la transición
                nav: false, // Oculta flechas
                dots: true, // Muestra los puntos abajo
                margin: 30 // Espaciado entre slides
            });
            $('.beneficios-carousel').owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                smartSpeed: 600,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 2
                    },
                    1200: {
                        items: 2
                    }
                }
            });

            $('.mobile-menu .menu-box a[href^="#"]').on('click', function() {
                $('.mobile-menu').removeClass('menu-opened');
                $('body').removeClass('mobile-menu-visible');
                $('.menu-backdrop').fadeOut(300);
            });

            $('a[href="#beneficios"]').on('click', function(e) {
                e.preventDefault();

                if (window.innerWidth < 992) {
                    $('html, body').animate({
                        scrollTop: $('#beneficiosMobile').offset().top
                    }, 600);
                } else {
                    $('html, body').animate({
                        scrollTop: $('#beneficios').offset().top
                    }, 600);
                }

                $('.mobile-menu').removeClass('menu-opened');
                $('body').removeClass('mobile-menu-visible');
                $('.menu-backdrop').fadeOut(300);
            });
            const intervalVideo = setInterval(() => {
                const toggleBtn = document.querySelector('.chat-window-wrapper .chat-window-toggle');
                if (!toggleBtn || toggleBtn.querySelector('video')) return;

                const svgIcon = toggleBtn.querySelector('svg');
                if (svgIcon) svgIcon.style.display = 'none';

                const vid = document.createElement('video');
                vid.src = '/assets/malebot-saluda.mp4';
                vid.autoplay = true;
                vid.loop = false;
                vid.muted = true;
                vid.playsInline = true;
                vid.style.width = '100%';
                vid.style.height = '100%';
                vid.style.borderRadius = '50%';
                vid.style.objectFit = 'cover';
                vid.style.pointerEvents = 'none';

                vid.addEventListener('ended', () => {
                    vid.currentTime = 0;
                    vid.pause();
                    setTimeout(() => {
                        vid.play().catch(() => {});
                    }, 15000);
                });

                vid.addEventListener('loadeddata', () => vid.play().catch(() => {}));

                toggleBtn.appendChild(vid);
                clearInterval(intervalVideo);
            }, 500);

            document.addEventListener('click', function(event) {
                const chatWindow = document.querySelector('.chat-window-wrapper .chat-window');
                const chatToggle = document.querySelector('.chat-window-wrapper .chat-window-toggle');

                if (!chatWindow || !chatToggle) return;

                const isVisible = getComputedStyle(chatWindow).display !== 'none';

                if (isVisible &&
                    !chatWindow.contains(event.target) &&
                    !chatToggle.contains(event.target)) {
                    chatToggle.click();
                }
            });
        });
    </script>
    <script>
        function postToIframe(iframeId, payload) {
            const iframe = document.getElementById(iframeId);
            if (!iframe) return;

            // Enviar ya si hay contentWindow
            if (iframe.contentWindow) {
                iframe.contentWindow.postMessage(payload, '*');
            }

            // Y además cuando termine de cargar (por si justo no estaba listo)
            const onLoad = () => {
                setTimeout(() => {
                    iframe.contentWindow?.postMessage(payload, '*');
                }, 300); // margen para que n8n monte el DOM
            };
            iframe.addEventListener('load', onLoad, {
                once: true
            });
        }

        function abrirChat(tipo) {
            // Verificar si es móvil
            if (window.innerWidth <= 768) {
                abrirVentanaLateral(tipo);
            } else {
                // Comportamiento original para desktop
                if (tipo === 'tienda') postToIframe('chat-tienda', {
                    action: 'abrirChat'
                });
                if (tipo === 'estetica') postToIframe('chat-estetica', {
                    action: 'abrirChat'
                });
            }
        }

        function abrirVentanaLateral(tipo) {
            const sidebar = document.getElementById('mobile-chat-sidebar');
            const overlay = document.getElementById('mobile-chat-overlay');
            const iframe = document.getElementById('mobile-chat-iframe');
            const title = document.getElementById('mobile-chat-title');

            // Configurar el iframe según el tipo
            if (tipo === 'tienda') {
                iframe.src = '/chat-tienda.html';
                title.textContent = 'Asistente Tienda Deportiva';
            } else if (tipo === 'estetica') {
                iframe.src = '/chat-estetica.html';
                title.textContent = 'Asistente Centro Estético';
            }

            // Abrir la ventana lateral
            sidebar.classList.add('open');
            overlay.classList.add('open');
            document.body.style.overflow = 'hidden'; // Prevenir scroll del body

            // Abrir automáticamente el chat cuando el iframe se cargue
            iframe.onload = function() {
                setTimeout(() => {
                    iframe.contentWindow?.postMessage({
                        action: 'abrirChat'
                    }, '*');
                }, 500);
            };
        }

        function cerrarVentanaLateral() {
            const sidebar = document.getElementById('mobile-chat-sidebar');
            const overlay = document.getElementById('mobile-chat-overlay');
            const iframe = document.getElementById('mobile-chat-iframe');

            sidebar.classList.remove('open');
            overlay.classList.remove('open');
            document.body.style.overflow = ''; // Restaurar scroll del body

            // Limpiar el iframe después de un pequeño delay
            setTimeout(() => {
                iframe.src = '';
            }, 300);
        }

        // Opcionales si quieres cerrar o alternar desde el padre:
        function cerrarChat(tipo) {
            if (tipo === 'tienda') postToIframe('chat-tienda', {
                action: 'cerrarChat'
            });
            if (tipo === 'estetica') postToIframe('chat-estetica', {
                action: 'cerrarChat'
            });
        }

        function toggleChat(tipo) {
            if (tipo === 'tienda') postToIframe('chat-tienda', {
                action: 'toggleChat'
            });
            if (tipo === 'estetica') postToIframe('chat-estetica', {
                action: 'toggleChat'
            });
        }

        // Listener para cambios de tamaño de ventana
        window.addEventListener('resize', function() {
            const sidebar = document.getElementById('mobile-chat-sidebar');
            const overlay = document.getElementById('mobile-chat-overlay');

            // Si cambiamos a desktop y la ventana lateral está abierta, cerrarla
            if (window.innerWidth > 768 && sidebar.classList.contains('open')) {
                cerrarVentanaLateral();
            }
        });

        // Cerrar ventana lateral con tecla Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const sidebar = document.getElementById('mobile-chat-sidebar');
                if (sidebar.classList.contains('open')) {
                    cerrarVentanaLateral();
                }
            }
        });
    </script>





    <!-- Modal del formulario -->



</body><!-- End of .page_wrapper -->

</html>
