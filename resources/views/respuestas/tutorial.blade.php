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
                    <a href="/respuestas-bot?canal=whatsapp" class="btn nav-link my-2 {{ $canal === 'whatsapp' ? 'active' : '' }}">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                @endif

                @if ($user->usa_instagram)
                    <a href="/respuestas-bot?canal=instagram" class="btn nav-link my-3 {{ $canal === 'instagram' ? 'active' : '' }}">
                        <i class="fab fa-instagram"></i> Instagram
                    </a>
                @endif
            </div>
            <div class="mt-4">

                <a href="/tutorial" class="btn nav-link my-3 {{ $canal === 'tutorial' ? 'active' : '' }}">
                    <i class="fas fa-play-circle"></i> Tutorial
                </a>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container py-4">
            
    
            <div class="mx-auto" style="max-width: 1020px;">
                <div class="ratio ratio-16x9">
                    <iframe
                        src="https://www.youtube.com/embed/VomS4CU4PJc?rel=0&modestbranding=1"
                        title="Tutorial TatsuBot"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
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
                vid.src = '/assets/bot-saluda3.mp4'; // <— asegúrate del nombre correcto
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const switchEl = document.getElementById('clavija');
            const estadoTxt = document.getElementById('estadoTxt');
            const statusTxt = document.getElementById('clavijaStatus');
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            switchEl.addEventListener('change', async () => {
                const status = switchEl.checked ? 1 : 0;

                estadoTxt.textContent = status === 1 ? 'Encendido' : 'Apagado';
                statusTxt.textContent = 'Guardando...';
                switchEl.disabled = true;

                try {
                    const resp = await fetch('{{ route('clavija.update') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            id_bot: '{{ $datosBot->id ?? null }}',
                            canal: '{{ $canal }}', // <-- Aquí agregamos el canal
                            status: status
                        })
                    });

                    if (!resp.ok) throw new Error('Error en la solicitud');

                    const result = await resp.json();
                    if (result.ok) {
                        statusTxt.textContent = '✔ Guardado';
                    } else {
                        throw new Error('Respuesta no válida');
                    }

                } catch (error) {
                    switchEl.checked = status !== 1;
                    estadoTxt.textContent = switchEl.checked ? 'Encendido' : 'Apagado';
                    statusTxt.textContent = '✖ Error al guardar';
                    console.error(error);
                } finally {
                    switchEl.disabled = false;
                    setTimeout(() => statusTxt.textContent = '', 2000);
                }
            });
        });
    </script>




</body>

</html>
