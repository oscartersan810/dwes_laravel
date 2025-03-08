<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmar Contraseña</title>
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
        img {
            width: 80px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('virtualbox_2024.png') }}" alt="VirtualBox Logo">
        <h1>Confirmar Contraseña</h1>
        <p>Esta es un área segura de la aplicación. Por favor, confirma tu contraseña antes de continuar.</p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control text-center" required autocomplete="current-password">
                @if ($errors->has('password'))
                    <div class="text-danger mt-2">{{ $errors->first('password') }}</div>
                @endif
            </div>

            <button type="submit" class="btn btn-warning mt-3">🔒 Confirmar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
