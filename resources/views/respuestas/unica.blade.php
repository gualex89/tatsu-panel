<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Configuración del Bot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- jQuery y Repeater --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    
   
    <link href="https://cdn.jsdelivr.net/npm/@n8n/chat/dist/style.css" rel="stylesheet" />
    <script type="module">
        import {
            createChat
        } from 'https://cdn.jsdelivr.net/npm/@n8n/chat/dist/chat.bundle.es.js';

        createChat({
            webhookUrl: "{{ 'https://tatsubot.makenafundas.com.ar/webhook/' . $datosBot->webhookId . '/chat' }}",

            initialMessages: [
                '¡Hola! 👋',
                "{{ 'Mi nombre es ' . $datosBot->nombre_bot . ' de  ' . $datosBot->nombre_empresa . ' ¿Como puedo ayudarte hoy?' }}"
            ],
            i18n: {
                en: {
                    title: " {{ $datosBot->nombre_empresa . ' Bot 🤖' }} ",
                    subtitle: "{{ $datosBot->canal }}",
                    footer: '',
                    getStarted: 'Nueva conversación',
                    inputPlaceholder: 'Escribe tu pregunta..',
                },
                defaultLanguage: 'es',

            }
        });
    </script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <style>
        
    </style>
</head>

<body>

    <div class="sidebar text-center">
        <img style="width: 190px;" src="{{ asset('assets-login/images/logo_white.png') }}" alt="Logo">

        <div class="mt-4 d-grid gap-2">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger w-100 mt-4">Cerrar sesión</button>
            </form>

            <div class="mt-4">
                @php $user = Auth::user(); @endphp

                @if ($user->usa_whatsapp)
                    <a href="?canal=whatsapp" class="btn nav-link my-2 {{ $canal === 'whatsapp' ? 'active' : '' }}">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                @endif

                @if ($user->usa_instagram)
                    <a href="?canal=instagram" class="btn nav-link my-3 {{ $canal === 'instagram' ? 'active' : '' }}">
                        <i class="fab fa-instagram"></i> Instagram
                    </a>
                @endif
            </div>
        </div>
    </div>


    <div class="content">
        <h2 class="mb-4">Configuración del Bot - {{ ucfirst($canal) }}</h2>

        @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: '¡Éxito!',
                        text: '{{ session('success') }}',
                        confirmButtonColor: '#56026e'
                    });
                });
            </script>
        @endif



        <form method="POST" action="{{ route('respuestas-bot.store') }}">
            @csrf
            <input type="hidden" name="canal" value="{{ $canal }}">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nombre_bot" class="form-label">Nombre del Bot</label>
                    <input type="text" class="form-control" id="nombre_bot" name="nombre_bot"
                        value="{{ old('nombre_bot', $datosBot->nombre_bot ?? '') }}" required>
                </div>
                <div class="col-md-6">
                    <label for="nombre_empresa" class="form-label">Nombre de la Empresa</label>
                    <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa"
                        value="{{ old('nombre_empresa', $datosBot->nombre_empresa ?? '') }}" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="rol" class="form-label">Rol</label>
                <input type="text" class="form-control" id="rol" name="rol"
                    value="{{ old('rol', $datosBot->rol ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label for="personalidad" class="form-label">Personalidad</label>
                <input type="text" class="form-control" id="personalidad" name="personalidad"
                    value="{{ old('personalidad', $datosBot->personalidad ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Respuestas</label>
                <div class="repeater">
                    <div data-repeater-list="items">
                        @if (isset($datosBot) && $datosBot->contenido)
                            @foreach ($datosBot->contenido as $item)
                                <div data-repeater-item class="row g-2 align-items-start mb-2">
                                    <div class="col-md-5">
                                        <input type="text" name="pregunta" class="form-control"
                                            placeholder="Cuando el cliente diga..."
                                            value="{{ $item['pregunta'] ?? '' }}" required>
                                    </div>
                                    <div class="col-md-5">
                                        <textarea name="respuesta" class="form-control auto-expand" rows="1" placeholder="El bot responderá..." required>{{ $item['respuesta'] ?? '' }}</textarea>
                                    </div>
                                    <div class="col-md-2 d-grid">
                                        <button type="button" data-repeater-delete
                                            class="btn btn-danger">Eliminar</button>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div data-repeater-item class="row g-2 align-items-center mb-2">
                                <div class="col-md-5">
                                    <input type="text" name="pregunta" class="form-control"
                                        placeholder="Cuando el cliente diga..." required>
                                </div>
                                <div class="col-md-5">
                                    <textarea name="respuesta" class="form-control auto-expand" rows="1" placeholder="El bot responderá..." required></textarea>
                                </div>
                                <div class="col-md-2 d-grid">
                                    <button type="button" data-repeater-delete class="btn btn-danger">Eliminar</button>
                                </div>
                            </div>
                        @endif
                    </div>
                    <button type="button" data-repeater-create class="btn btn-success mt-2">+ Agregar
                        Comportamiento</button>
                </div>
            </div>
            <button type="submit" class="button-36" role="button">💾 Guardar configuración</button>

        </form>

    </div>
    {{-- <div class="texto-prueba-bot">
        💬 Pruebalo aqui
      </div> --}}

    <script>
        $('.repeater').repeater({
            initEmpty: false,
            defaultValues: {
                'pregunta': '',
                'respuesta': ''
            },
            show: function() {
                $(this).slideDown();
            },
            hide: function(deleteElement) {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "Esta comportamiento será eliminado.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).slideUp(deleteElement);
                    }
                });
            }
        });

        function ajustarAltura(textarea) {
            textarea.style.height = 'auto';
            textarea.style.height = (textarea.scrollHeight) + 'px';
        }

        document.addEventListener('input', function(e) {
            if (e.target.tagName.toLowerCase() === 'textarea' && e.target.classList.contains('auto-expand')) {
                ajustarAltura(e.target);
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('textarea.auto-expand').forEach(ajustarAltura);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const interval = setInterval(() => {
                const toggleBtn = document.querySelector('.chat-window-wrapper .chat-window-toggle');
                if (!toggleBtn || toggleBtn.querySelector('video')) return;

                // Oculta el ícono por defecto
                const svgIcon = toggleBtn.querySelector('svg');
                if (svgIcon) svgIcon.style.display = 'none';

                // Crea el video
                const vid = document.createElement('video');
                vid.src = '/assets/agentesaluda.mp4'; // <— asegúrate del nombre correcto
                vid.autoplay = true;
                vid.loop = false; // no repetir automáticamente
                vid.muted = true; // necesario para autoplay
                vid.playsInline = true; // iOS
                vid.style.width = '100%';
                vid.style.height = '100%';
                vid.style.borderRadius = '50%';
                vid.style.objectFit = 'cover';
                vid.style.pointerEvents = 'none'; // no bloquear el click del botón

                // Al terminar: volver al inicio, pausar, y reproducir después de 10s
                vid.addEventListener('ended', () => {
                    vid.currentTime = 0; // primer frame
                    vid.pause();
                    setTimeout(() => {
                        vid.play().catch(() => {});
                    }, 15000); // 15 segundos
                });

                // Si el navegador bloquea autoplay, intenta al cargar
                vid.addEventListener('loadeddata', () => vid.play().catch(() => {}));

                toggleBtn.appendChild(vid);
                clearInterval(interval); // deja de buscar
            }, 500); // revisa cada 500ms
        });
    </script>


</body>

</html>
