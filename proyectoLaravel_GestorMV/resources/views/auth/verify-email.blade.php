<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verificar Correo</title>
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
            max-width: 500px;
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
        .text-success {
            color: #28a745;
            font-weight: bold;
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
        <h1>Verificar Correo</h1>
        <p>¡Gracias por registrarte! Antes de comenzar, verifica tu correo electrónico haciendo clic en el enlace que te enviamos.</p>
        
        @if (session('status') == 'verification-link-sent')
            <p class="text-success">✔ Se ha enviado un nuevo enlace de verificación a tu correo.</p>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-warning mt-3">📧 Reenviar Correo de Verificación</button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-danger">🚪 Cerrar Sesión</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
