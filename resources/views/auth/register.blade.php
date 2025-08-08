<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="container d-flex justify-content-center">
        <form action="" method="POST" class="m-auto bg-white p-5 rounded-sm shadow-lg w-form pt-5">
            @csrf
            <h2 class="text-center mb-5">
                Register Form

            </h2>
            <div class="form-group mb-3">
                <label for = "exampleInputEmail1">Email address</label>
                <input name="email" type="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                @error('email')
                    <small class="text-danger mt-1">
                        <strong> {{ $message }}</strong>
                    </small>
                @enderror

            </div>

            <div class="form-group mb-3">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                @error('password')
                    <small class="text-danger mt-1">
                        <strong> {{ $message }}</strong>
                    </small>
                @enderror
            </div>

            <div class="form-group  mb-3">
                <label for="exampleInputPassword2">Password Confirmation</label>
                <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                @error('password_confirmation')
                    <small class="text-danger mt-1">
                        <strong> {{ $message }}</strong>
                    </small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block  w-100">Register</button>
            <div class="mt-3 text-center">
                <a href="{{route('login')}}" class="text-gray-700 dark:text-gray-200 hover:underline">Iniciar Sesión</a>

            </div>

        </form>
    </div>

    
  </body>
</html>