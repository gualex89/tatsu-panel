<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Erratum – Multi purpose error page template for Service, corporate, agency, Consulting, startup.">
    <meta name="keywords" content="Error page 404, page not found design, wrong url">
    <meta name="author" content="Ashishmaraviya">
    <link rel="icon" href="{{ asset('assets-login/images/favicon.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets-login/images/favicon.png') }}" type="image/x-icon" />
    <title>MakenaApp-Login</title>
    <!--Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap"
        rel="stylesheet">
    <!-- Bootstrap css -->
    <!-- Bootstrap Bundle con Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets-login/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-login/css/fontawesome.css') }}">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-login/css/login.css') }}">
</head>

<body>
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
    <!-- 01 Preloader -->
    
    <!-- Preloader end -->
    <!-- 02 Main page -->
    <section class="page-section login-page">
        <div class="full-width-screen">
            <div class="container-fluid p-0">
                <div class="particles-bg" id="particles-js">
                    <div id="divparticles" class="row d-flex justify-content-between align-items-center px-3 py-4">
                        <!-- Volver -->
                        <div class="col-auto">
                          <h2 class="m-0">
                            <a href="/" class="text-white text-decoration-none">&lt; Volver</a>
                          </h2>
                        </div>
                      
                        <!-- Botón -->
                        <div class="col-auto">
                          <a href="#" class="theme-btn btn-ten" data-bs-toggle="modal" data-bs-target="#formModal">
                            QUIERO MI BOT
                          </a>
                        </div>
                    </div>
                        
                    <div class="content-detail">
                        <!-- Login form -->
                        <form action="" class="login-form" method="POST">
                            @csrf
                            <div class="imgcontainer">
                                <img src="{{ asset('assets-login/images/logo_black.png') }}" style="width: 200px;" alt="Avatar" class="avatar">

                            </div>
                            <div class="input-control">
                                <input name="email" type="email" value="{{old('email')}}"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                                <span class="password-field-show">
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                                        class="password-field" required>
                                    <span data-toggle=".password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </span>
                                
                                
                                <div class="login-btns">
                                    <button type="submit">Ingresar</button>
                                </div>
                               
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest jquery-->
    <script src="{{ asset('assets-login/js/jquery-3.5.1.min.js') }}"></script>
    <!-- theme particles script -->
    <script src="{{ asset('assets-login/js/particles.min.js') }}"></script>
    <script src="{{ asset('assets-login/js/app.js') }}"></script>
    <!-- Theme js-->
    <script src="{{ asset('assets-login/js/script.js') }}"></script>
</body>

</html>