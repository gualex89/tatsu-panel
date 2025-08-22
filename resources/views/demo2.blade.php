<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>TatsuBot - Asistentes Inteligentes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            background: rgba(0, 0, 0, 0.5); /* negro con transparencia */
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
    </style>
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
  .chat-window-wrapper {
      position: fixed !important;
      left: 25px !important;
      right: auto !important;
      bottom: 25px !important;
      justify-content: flex-start !important; /* ← aquí está el verdadero truco */
      z-index: 9999;
  }

  .chat-window-wrapper.open {
      left: 25px !important;
      right: auto !important;
      justify-content: flex-start !important;
  }

  .chat-window {
      left: 0 !important;
      right: auto !important;
      transform: none !important;
  }
  .chat-window-toggle{
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
      justify-content: flex-end !important;
    }
  
    /* Ajustes comunes */
    .chat-window-wrapper {
      position: fixed !important;
      bottom: 25px !important;
      z-index: 9999;
    }
  
    .chat-window-toggle {
      margin-left: 0 !important;
    }
  </style>
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">Prueba nuestros asistentes inteligentes</h1>

        <div class="row g-5">
            <!-- BOT 1: Tienda Deportiva -->
            <div class="col-md-6">
                <div class="bot-box">
                    <img src="{{ asset('assets/images/tatsu-tienda-deportiva.png') }}" style="height: 450px; " class="" alt="Bot Tienda Deportiva">

                    <div class="overlay d-flex flex-column justify-content-center align-items-center text-center">
                        <h5 class="fw-bold mb-2">Asistente Tienda Deportiva</h5>
                        <p class="small">Consulta productos, stock o precios en tiempo real.</p>
                    </div>

                    
                </div>
            </div>

            <!-- BOT 2: Centro Estético -->
            <div class="col-md-6">
                <div class="bot-box">
                    <img src="{{ asset('assets/images/estetica-imagen.png') }}" style="height: 450px; " class="" alt="estetica">

                    <div class="overlay d-flex flex-column justify-content-center align-items-center text-center">
                        <h5 class="fw-bold mb-2">Asistente Centro Estético</h5>
                        <p class="small">Agenda horas, consulta servicios o promociones activas.</p>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chat izquierdo (Tienda Deportiva) -->
<iframe 
src="/chat-tienda.html" 
style="position: fixed; bottom: 5px; left: 25px; width: 520px; height: 600px; border: none; z-index: 9999;"

></iframe>

<!-- Chat derecho (Centro Estético) -->
<iframe 
src="/chat-estetica.html" 
style="position: fixed; bottom: 5px; right: 25px; width: 380px; height: 600px; border: none; z-index: 9999;"

></iframe>

<script>
    document.addEventListener('click', function(event) {
      const iframes = document.querySelectorAll("iframe[src*='chat-']");
    
      iframes.forEach(iframe => {
        const rect = iframe.getBoundingClientRect();
        const inside = (
          event.clientX >= rect.left &&
          event.clientX <= rect.right &&
          event.clientY >= rect.top &&
          event.clientY <= rect.bottom
        );
        if (!inside) {
          iframe.contentWindow.postMessage({ action: 'cerrarChat' }, '*');
        }
      });
    });
    </script>
    

</body>

</html>
