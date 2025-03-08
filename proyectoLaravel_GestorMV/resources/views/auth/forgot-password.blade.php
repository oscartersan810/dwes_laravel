<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperar Contraseña</title>
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
        .back-to-login {
            display: block;
            margin-top: 10px;
            color: #f1c40f;
            text-decoration: none;
        }
        .back-to-login:hover {
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
        <h1>Recuperar Contraseña</h1>
        
        <div class="mb-4 text-sm">
            {{ __('Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.') }}
        </div>
        
        <!-- Session Status -->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input id="email" type="email" class="form-control mt-1" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-warning mt-3">📩 Enviar Enlace</button>
        </form>

        <a class="back-to-login" href="{{ route('login') }}">🔙 Volver al inicio de sesión</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>