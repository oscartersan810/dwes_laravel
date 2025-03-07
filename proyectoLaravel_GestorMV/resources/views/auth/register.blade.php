<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #141e30, #243b55);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
            text-align: center;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.6);
            width: 90%;
            max-width: 400px;
        }
        h1 {
            color: #f1c40f;
            margin-bottom: 20px;
        }
        .btn {
            font-size: 1.1rem;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            transition: all 0.3s ease;
        }
        .btn:hover {
            transform: scale(1.05);
        }
        .form-group {
            text-align: left;
        }
        label {
            font-weight: bold;
            color: #f1c40f;
        }
        .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border: none;
        }
        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
        }
        .login-link {
            display: block;
            margin-top: 10px;
            color: #f1c40f;
            text-decoration: none;
        }
        .login-link:hover {
            text-decoration: underline;
        }
        img {
            width: 80px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('virtualbox_2024.png') }}" alt="VirtualBox Logo">
        <h1>Registrarse</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <label for="name">Nombre</label>
                <input id="name" type="text" class="form-control mt-1" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                @error('name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="form-group mt-3">
                <label for="email">Correo Electrónico</label>
                <input id="email" type="email" class="form-control mt-1" name="email" value="{{ old('email') }}" required autocomplete="username">
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group mt-3">
                <label for="password">Contraseña</label>
                <input id="password" type="password" class="form-control mt-1" name="password" required autocomplete="new-password">
                @error('password')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group mt-3">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input id="password_confirmation" type="password" class="form-control mt-1" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-warning mt-3">📝 Registrarse</button>

            <!-- Login Link -->
            <p class="mt-3">¿Ya tienes una cuenta? <a class="login-link" href="{{ route('login') }}">Inicia sesión aquí</a></p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
