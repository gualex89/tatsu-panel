<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <title>TatsuBot - Tu Asistente Virtual Inteligente</title>
  <meta name="description" content="TatsuBot automatiza la atención de tu negocio: responde consultas, muestra tu catálogo y convierte visitas en ventas.">

  <!-- Favicon -->
  <link rel="icon" href="assets/images/favicontatsubot.ico" type="image/x-icon">

  <!-- Open Graph (redes sociales) -->
  <meta property="og:title" content="TatsuBot - Tu Asistente Virtual Inteligente">
  <meta property="og:description" content="Automatizá la atención de tu negocio con TatsuBot. Tu tienda disponible 24/7 para responder, vender y sorprender.">
  <meta property="og:image" content="https://tatsubot.site/assets/images/gallery/whatsapp-conversacion.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:url" content="https://tatsubot.site">
  <meta property="og:type" content="website">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
  
  <link href="https://cdn.jsdelivr.net/npm/@n8n/chat/dist/style.css" rel="stylesheet" />
  <script type="module">
      import { createChat } from 'https://cdn.jsdelivr.net/npm/@n8n/chat/dist/chat.bundle.es.js';
      
      createChat({
          webhookUrl: 'https://tatsubot.makenafundas.com.ar/webhook/ce56c971-443b-4aa4-999f-96271b0102e8/chat',
          initialMessages : [ 
              '¡Hola! 👋' , 
              'Mi nombre es TatsuBot. ¿Cómo puedo ayudarte hoy?' 
            ] ,
            i18n : { 
                en : { 
                    title : 'Tatsu Bot 🤖' , 
                    subtitle :  '' ,
                    footer : '' , 
                    getStarted : 'Nueva conversación' , 
                    inputPlaceholder : 'Escribe tu pregunta..' , 
                } , 
                defaultLanguage : 'es' ,
                
            } 
        });
        </script>
    <link href="./assets/css/style-v2.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <style>
        .chat-window-wrapper .chat-window-toggle{
            background: #4a0f6f;
        }
        .chat-window-wrapper .chat-window-toggle:hover{
            background: #4a0f6f;
        }
        .chat-header {
            background: #4a0f6f !important;
        }

        .chat-window {
            border-radius: 25px !important;
        }

        .scroll-top.open{
            left: 25px !important;
            background: #4a0f6f !important;
        }
        
        .scroll-top.style-two {
            left: 25px !important;
            background: #4a0f6f !important;
        }
        .chat-message.chat-message-from-user:not(.chat-message-transparent) {
            
            border-radius: 20px 20px 0px 20px !important;
        }   

        .chat-message.chat-message-from-bot:not(.chat-message-transparent) {
            
            border-radius: 20px 20px 20px 0px !important;
        }
        .chat-layout .chat-body{
    background-image: url(https://vgroup-content.vgroup.cl/2025/07/28/tsbt.png);
    background-repeat: repeat;
    }
    .chat-message.chat-message-from-bot:not(.chat-message-transparent) {
    background-color: #c2ecf0;
    border: var(--chat--message--bot--border);
    }

    </style>
</head>




<!-- page wrapper -->
<body>
    <!-- Modal del formulario limpio -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content" style="background: none; border: none;">
        <div class="modal-body p-0">
            <iframe 
            src="https://tatsubot.makenafundas.com.ar/form/contactame" 
            width="100%" 
            height="700" 
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
                          <li><a href="/demo">Demo</a></li>

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
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-tatsu-white.png" alt="" title=""></a></div>

                <div class="mobile-quick-actions my-3 d-flex align-items-center">
                    <a href="#" class="theme-btn btn-ten btn-mobile-mini me-2" data-bs-toggle="modal" data-bs-target="#formModal">Contactame</a>
                    <a href="{{ route('login') }}" class="theme-btn btn-eight btn-mobile-mini">Ingresar <i class="fas fa-sign-in-alt"></i></a>
                </div>

                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Informacion de Contacto</h4>
                    <ul>
                        
                        <li><a href="">+569 6765 6673</a></li>
                        <li><a href="mailto:tatsubot@gmail.com">tatsubot@gmail.com</a></li>
                        
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        
                        <li><a href="https://wa.me/56967656673?text=Hola,%20quiero%20ver%20una%20demonstración%20de%20TatsuBot."  target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- banner-section -->
        <section id="home" class="banner-style-six">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-50.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image image-1"><img src="assets/images/banner/banner-11.png" alt=""></figure>
                            <figure class="image image-2"><img src="assets/images/banner/banner-12.png" alt=""></figure>
                            <figure class="image image-3"><img src="assets/images/banner/banner-13.png" alt=""></figure>
                            <figure class="image image-4 wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="assets/images/icons/chat-1.png" alt=""></figure>
                            <figure class="image image-5"><img src="assets/images/banner/banner-14.png" alt=""></figure>
                            <figure class="image image-6 wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="assets/images/icons/chat-2.png" alt=""></figure>
                            <figure class="image image-7"><img src="assets/images/banner/banner-15.png" alt=""></figure>
                            <figure class="image image-8 float-bob-y"><img src="assets/images/banner/banner-16.png" alt=""></figure>
                            <figure class="image image-9 wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="assets/images/icons/chat-3.png" alt=""></figure>
                            <figure class="image image-10 float-bob-y" data-wow-duration="1500ms"><img src="assets/images/banner/banner-17.png" alt=""></figure>
                            <figure class="image image-11 float-bob-y" data-wow-duration="1500ms"><img src="assets/images/icons/icon-20.png" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <h2>Tu asistente virtual inteligente para atención 24/7</h2>
                            <p>Automatizá tu atención al cliente sin perder cercanía ni ventas</p>
                            <div class="btn-box">
                                <div>

                                    <a href="https://wa.me/56967656673?text=Hola,%20quiero%20información%20sobre%20TatsuBot." class="theme-btn btn-ten" target="_blank">
                                        Contactar por WhatsApp
                                    </a>
                                </div>
                                <div class="mt-3">

                                    <a href="/demo" class="theme-btn btn-ten">
                                        Ver Demostración
                                    </a>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- banner-section end -->

        <section id="beneficios" class="service-style-six pb-0 d-none d-lg-block">
            <div class="auto-container">
                <div class="sec-title style-two centred">
                    <h2>¿Por qué usar TatsuBot?</h2>
                    <div class="text">Descubre cómo nuestro asistente puede potenciar tu negocio</div>
                    
                    <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                </div>
                <div class="">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                            <div class="service-block-six">
                                <div class="inner-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-51.png);"></div>
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="assets/images/icons/robotico.svg" alt="Bot Conversacional" class="icono-bot" />
                                        </div>
                                        <div class="icon-shape" style="background-image: url(assets/images/icons/bg-shape-1.png);"></div>
                                    </div>
                                    <h3>Disponible 24/7</h3>
                                    <p>Atiende a tus clientes en cualquier momento, sin pausas ni demoras.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                            <div class="service-block-six">
                                <div class="inner-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-51.png);"></div>
                                    <div class="icon-box">
                                       <div class="icon">
                                            <img src="assets/images/icons/destello_1.svg" alt="Bot Conversacional" class="icono-bot" />
                                        </div>
                                        <div class="icon-shape" style="background-image: url(assets/images/icons/bg-shape-1.png);"></div>
                                    </div>
                                    <h3>Respuestas rápidas</h3>
                                    <p>Reduce el tiempo de espera y mejorá la experiencia del usuario.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                            <div class="service-block-six">
                                <div class="inner-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-51.png);"></div>
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="assets/images/icons/aumentar_1.svg" alt="Bot Conversacional" class="icono-bot" />
                                        </div>
                                        <div class="icon-shape" style="background-image: url(assets/images/icons/bg-shape-1.png);"></div>
                                    </div>
                                    <h3>Aumenta tus ventas</h3>
                                    <p>Convierte más visitantes en clientes gracias a una atención inmediata.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                            <div class="service-block-six">
                                <div class="inner-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-51.png);"></div>
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="assets/images/icons/ahorrar-tiempo.svg" alt="Bot Conversacional" class="icono-bot" />
                                        </div>
                                        <div class="icon-shape" style="background-image: url(assets/images/icons/bg-shape-1.png);"></div>
                                    </div>
                                    <h3>Ahorro de tiempo</h3>
                                    <p>Automatiza tareas repetitivas y enfoca tu tiempo en lo importante.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- service-style-six -->
        <section id="beneficiosMobile" class="service-style-six pb-0 d-block d-lg-none">
            <div class="auto-container">
              <div class="sec-title style-two centred">
                <h2>¿Por qué usar TatsuBot?</h2>
                <div class="text">Descubre cómo nuestro asistente puede potenciar tu negocio</div>
                <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
              </div>
          
              <!-- Carrusel -->
              <div class="owl-carousel owl-theme beneficios-carousel">
                <!-- Slide 1 -->
                <div class="service-block-six">
                  <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-51.png);"></div>
                    <div class="icon-box">
                      <div class="icon">
                        <img src="assets/images/icons/robotico.svg" alt="Disponible 24/7" class="icono-bot" />
                      </div>
                      <div class="icon-shape" style="background-image: url(assets/images/icons/bg-shape-1.png);"></div>
                    </div>
                    <h3>Disponible 24/7</h3>
                    <p>Atiende a tus clientes en cualquier momento, sin pausas ni demoras.</p>
                  </div>
                </div>
          
                <!-- Slide 2 -->
                <div class="service-block-six">
                  <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-51.png);"></div>
                    <div class="icon-box">
                      <div class="icon">
                        <img src="assets/images/icons/destello_1.svg" alt="Respuestas rápidas" class="icono-bot" />
                      </div>
                      <div class="icon-shape" style="background-image: url(assets/images/icons/bg-shape-1.png);"></div>
                    </div>
                    <h3>Respuestas rápidas</h3>
                    <p>Reduce el tiempo de espera y mejorá la experiencia del usuario.</p>
                  </div>
                </div>
          
                <!-- Slide 3 -->
                <div class="service-block-six">
                  <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-51.png);"></div>
                    <div class="icon-box">
                      <div class="icon">
                        <img src="assets/images/icons/aumentar_1.svg" alt="Aumenta tus ventas" class="icono-bot" />
                      </div>
                      <div class="icon-shape" style="background-image: url(assets/images/icons/bg-shape-1.png);"></div>
                    </div>
                    <h3>Aumenta tus ventas</h3>
                    <p>Convierte más visitantes en clientes gracias a una atención inmediata.</p>
                  </div>
                </div>
          
                <!-- Slide 4 -->
                <div class="service-block-six">
                  <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-51.png);"></div>
                    <div class="icon-box">
                      <div class="icon">
                        <img src="assets/images/icons/ahorrar-tiempo.svg" alt="Ahorro de tiempo" class="icono-bot" />
                      </div>
                      <div class="icon-shape" style="background-image: url(assets/images/icons/bg-shape-1.png);"></div>
                    </div>
                    <h3>Ahorro de tiempo</h3>
                    <p>Automatiza tareas repetitivas y enfoca tu tiempo en lo importante.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
        <!-- service-style-six end -->

        <div style="padding-bottom: 100px;" id="como-funciona"> </div>
        <!-- about-style-six -->
        <section class="about-style-six">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-52.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/whatsapp-conversacion.png" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_13">
                            <div class="content-box">
                                <div class="sec-title style-two">
                                    
                                    <h2>Automatiza tu atención al cliente con WhatsApp o Instagram</h2>
                                    <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                                </div>
                                <div class="text">
                                    <p>Tu asistente responde 24/7, comparte catálogos, informa horarios, ubicación y mucho más, todo desde WhatsApp o Instagram.</p>
                                </div>
                                <div class="inner-box">
                                    <div class="single-item">
                                        <div  class="text-">
                                            <img src="assets/images/icons/microfono.svg" alt="Bot Conversacional" class="icono-automatiza" />
                                        </div>
                                        <h5>Responde a mensajes de voz o texto</h5>
                                        <p>Tu asistente puede escuchar notas de voz y responderle a tus clientes</p>
                                    </div>
                                    <div class="single-item">
                                        <div  class="text-">
                                            <img src="assets/images/icons/en-todo-el-mundo.svg" alt="Bot Conversacional" class="icono-automatiza" />
                                        </div>
                                        <h5>Mayor alcance</h5>
                                        <p>Brindá atención inmediata a cualquier hora y desde cualquier parte.</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-six end -->


        


       


        


        <!-- pricing-style-two -->
        <section id="precios" class="pricing-style-two centred">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-52.png);"></div>
            <div class="auto-container">
                <div class="sec-title style-two">
                    
                    <h2>Planes y precios</h2>
                    <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                    
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="pricing-table">
                                <div class="bg-shape-2" style="background-image: url(assets/images/shape/shape-56.png);"></div>
                                <div class="bg-shape-3" style="background-image: url(assets/images/shape/shape-57.png);"></div>
                                <div class="table-content">
                                    <div class="bg-shape" style="background-image: url(assets/images/shape/shape-53.png);"></div>
                                    <div class="light-shape" style="background-image: url(assets/images/shape/shape-55.png);"></div>
                                    <div class="table-header">
                                        <h3>Pro</h3>
                                        <p>Plan pro ideal para empezar</p>
                                    </div>
                                    <div class="pricing-box">
                                        
                                        <h3 id="precio-pro"><span>$</span></h3>
                                        <p>Por mes</p>
                                    </div>
                                    <div class="links-box">
                                        <a href="https://wa.me/56967656673?text=Hola,%20quiero%20mi%20TatsuBot%20Pro."  target="_blank">
                                            Lo quiero
                                        </a>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="bg-shape" style="background-image: url(assets/images/shape/shape-54.png);"></div>
                                    <div class="light-shape" style="background-image: url(assets/images/shape/shape-55.png);"></div>
                                    <ul class="list clearfix">
                                        <li>Inteligencia Artificial Pro</li>
                                        <li>2 Canales (WhatsApp e Instagram)</li>
                                        <li>300 conversaciones mensuales</li>
                                        
                                    </ul>
                                    <div class="links-box">
                                        <a href="https://wa.me/56967656673?text=Hola,%20quiero%20mi%20TatsuBot%20Pro."  target="_blank">
                                            Lo quiero
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="pricing-table">
                                <div class="bg-shape-2" style="background-image: url(assets/images/shape/shape-56.png);"></div>
                                <div class="bg-shape-3" style="background-image: url(assets/images/shape/shape-57.png);"></div>
                                <div class="table-content">
                                    <div class="bg-shape" style="background-image: url(assets/images/shape/shape-53.png);"></div>
                                    <div class="light-shape" style="background-image: url(assets/images/shape/shape-55.png);"></div>
                                    <div class="table-header">
                                        <h3>Premium</h3>
                                        <p>Perfecto para negocios en crecimiento</p>
                                    </div>
                                    <div class="pricing-box">
                                        <h3 id="precio-premium"><span>$</span></h3>
                                        <p>por mes</p>
                                    </div>
                                    <div class="links-box">
                                        <a href="https://wa.me/56967656673?text=Hola,%20quiero%20mi%20TatsuBot%20Premium."  target="_blank">
                                            Lo quiero
                                        </a>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="bg-shape" style="background-image: url(assets/images/shape/shape-54.png);"></div>
                                    <div class="light-shape" style="background-image: url(assets/images/shape/shape-55.png);"></div>
                                    <ul class="list clearfix">
                                        <li>Inteligencia Artificial Avanzada</li>
                                        <li>2 Canales (WhatsApp e Instagram)</li>
                                        <li>Conversaciones mensuales ilimitadas</li>
                                        <li>Bases de datos</li>
                                    </ul>
                                    <div class="links-box">
                                        <a href="https://wa.me/56967656673?text=Hola,%20quiero%20mi%20TatsuBot%20Premium."  target="_blank">
                                            Lo quiero
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="pricing-table">
                                <div class="bg-shape-2" style="background-image: url(assets/images/shape/shape-56.png);"></div>
                                <div class="bg-shape-3" style="background-image: url(assets/images/shape/shape-57.png);"></div>
                                <div class="table-content">
                                    <div class="bg-shape" style="background-image: url(assets/images/shape/shape-53.png);"></div>
                                    <div class="light-shape" style="background-image: url(assets/images/shape/shape-55.png);"></div>
                                    <div class="table-header">
                                        <h3>Custom</h3>
                                        <p>Solución a medida para tu negocio</p>
                                    </div>
                                    
                                    <div class="pricing-box">
                                        <h3 id="precio-custom"><span></span>Consultar valor</h3>
                                        <p>por mes</p>
                                        <a href="https://wa.me/56967656673?text=Hola,%20quiero%20mi%20TatsuBot%20Custom."  target="_blank">
                                            Lo quiero
                                        </a>
                                        
                                    </div>
                                    <div class="links-box">
                                        <a href="https://wa.me/56967656673?text=Hola,%20quiero%20mi%20TatsuBot%20Custom."  target="_blank">
                                            Lo quiero
                                        </a>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="bg-shape" style="background-image: url(assets/images/shape/shape-54.png);"></div>
                                    <div class="light-shape" style="background-image: url(assets/images/shape/shape-55.png);"></div>
                                    <ul class="list clearfix">
                                        <li>Plan 100% personalizado según tus necesidades.</li>
                                        <li>Ideal para empresas con requerimientos especiales.</li>
                                        
                                    </ul>
                                    <div class="links-box">
                                        <a href="https://wa.me/56967656673?text=Hola,%20quiero%20mi%20TatsuBot%20Custom."  target="_blank">
                                            Lo quiero
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-style-two end -->


       <!-- testimonial-style-four -->
        <section id="testimonios" class="testimonial-style-four centred">
            <div class="auto-container">
                <div class="sec-title style-two pt-0 mb-0">
                    <h2>Clientes</h2>
                    <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                </div>
                <div class="testimonial-content">
                    <!-- Un solo carrusel con imagen + texto -->
                    <div class="client-thumb-outer">
                        <div class="client-testimonial-carousel owl-carousel owl-theme">
                            
                            <!-- Testimonio 1 -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="thumb-item">
                                        <figure class="thumb-box"><img src="assets/images/gallery/mkn_icon.png" alt=""></figure>
                                    </div>
                                    <div class="author">
                                        <h3>Makena Fundas</h3>
                                        <span class="designation">Fundas de Celulares</span>
                                    </div>
                                    <div class="text">
                                        <div class="icon-box"><i class="fas fa-quote-right"></i></div>
                                        <p>Nos escribían muchas personas al mismo tiempo y se volvía difícil responder bien a todos. Ahora el bot nos ayuda con las respuestas más comunes y eso nos da un respiro.</p>
                                        <ul class="rating clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonio 2 -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="thumb-item">
                                        <figure class="thumb-box"><img src="assets/images/gallery/snklogo.png" alt=""></figure>
                                    </div>
                                    <div class="author">
                                        <h3>Tokya Sushi</h3>
                                        <span class="designation">Sushi nikkei</span>
                                    </div>
                                    <div class="text">
                                        <div class="icon-box"><i class="fas fa-quote-right"></i></div>
                                        <p>En los momentos en que entran más pedidos, se nos hacía muy difícil atender a todos los clientes con rapidez y en orden. Con esta herramienta lo solucionamos.</p>
                                        <ul class="rating clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="thumb-item">
                                        <figure class="thumb-box"><img src="assets/images/gallery/mrm_icon.png" alt=""></figure>
                                    </div>
                                    <div class="author">
                                        <h3>Mirame</h3>
                                        <span class="designation">Estética Facial</span>
                                    </div>
                                    <div class="text">
                                        <div class="icon-box"><i class="fas fa-quote-right"></i></div>
                                        <p>Estoy casi todo el día atendiendo clientas, y muchas veces no podía responder los mensajes a tiempo. Ahora el bot se encarga de dar la información básica mientras yo trabajo tranquila. ¡Una ayuda enorme para quienes emprendemos solas!</p>
                                        <ul class="rating clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Agregá más testimonios aquí -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-four end -->



        


        


       


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
                        <div class="btn-box">
                            <a href="/demo"
                                class="theme-btn btn-ten">
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
                                <li><a href="#beneficios">Beneficios</a></li>
                                <li><a href="#como-funciona">¿Cómo funciona?</a></li>
                                <li><a href="#precios">Precios</a></li>
                                <li><a href="#testimonios">Testimonios</a></li>
                                <li><a href="/demo">Demostración</a></li>

                                
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
                <figure class="footer-logo"><a href="#"><img src="assets/images/logo-tatsu-white.png" alt="Logo"></a></figure>
                <div class="copyright">
                    <p>&copy; 2025 <a href="#">TatsuBot</a>. Todos los derechos reservados.</p>
                </div>
                <ul class="social-links clearfix">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://wa.me/56967656673?text=Hola,%20quiero%20ver%20una%20demonstración%20de%20TatsuBot."  target="_blank">
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
        <button class="scroll-top style-two scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>

        
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
    document.addEventListener('DOMContentLoaded', function () {
        $(".client-testimonial-carousel").owlCarousel({
            items: 1,                  // Un solo testimonio a la vez
            loop: true,                // Repite infinito
            autoplay: true,            // Cambia automáticamente
            autoplayTimeout: 5000,     // Tiempo entre slides
            autoplayHoverPause: true,  // Pausa si se pasa el mouse encima
            smartSpeed: 600,           // Suavidad en la transición
            nav: false,                // Oculta flechas
            dots: true,                // Muestra los puntos abajo
            margin: 30                 // Espaciado entre slides
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
                0: { items: 1 },
                768: { items: 2 },
                992: { items: 2 },
                1200: { items: 2 }
            }
        });

        $('.mobile-menu .menu-box a[href^="#"]').on('click', function () {
            $('.mobile-menu').removeClass('menu-opened');
            $('body').removeClass('mobile-menu-visible');
            $('.menu-backdrop').fadeOut(300);
        });
    
        $('a[href="#beneficios"]').on('click', function (e) {
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
                    vid.play().catch(() => { });
                }, 15000);
            });
    
            vid.addEventListener('loadeddata', () => vid.play().catch(() => { }));
    
            toggleBtn.appendChild(vid);
            clearInterval(intervalVideo);
        }, 500);

        document.addEventListener('click', function (event) {
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
    (function() {
      const header = document.querySelector('.main-header.header-style-six');
      function fixBodyPadding(){
        if(!header) return;
        document.body.style.paddingTop = header.offsetHeight + 'px';
      }
      window.addEventListener('load', fixBodyPadding);
      window.addEventListener('resize', fixBodyPadding);
    })();
  </script>
  <script>
    // Detectar país con ipapi
    fetch("https://ipapi.co/json/")
        .then(res => res.json())
        .then(data => {
            console.log(data.country_name)
            let country = data.country_name; 
            let precioPro = "";
            let precioPremium = "";
            console.log(country)
            switch(country) {
                case "Argentina":
                    precioPro = "58.000 ARS";
                    precioPremium = "95.000 ARS";
                    break;
                case "Chile":
                    precioPro = "55.000 CLP";
                    precioPremium = "78.000 CLP";
                    break;
                case "Venezuela":
                    precioPro = "74 USD";
                    precioPremium = "112 USD";
                    break;
                default:
                    // fallback: USD
                    precioPro = "$74 USD";
                    precioPremium = "$112 USD";
            }
    
            document.getElementById("precio-pro").innerText = precioPro;
            document.getElementById("precio-premium").innerText = precioPremium;
        })
        .catch(err => {
            console.error("Error detectando ubicación:", err);
            document.getElementById("precio-pro").innerText = "$79 USD";
            document.getElementById("precio-premium").innerText = "$109 USD";
        });
    </script>
  

<!-- Modal del formulario -->

  

</body><!-- End of .page_wrapper -->
</html>
