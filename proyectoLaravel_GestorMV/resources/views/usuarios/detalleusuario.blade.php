<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #2c3e50, #ba34db);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.6);
            width: 90%;
            max-width: 600px;
        }
        .info-box {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .btn-back {
            background-color: #e74c3c;
            color: white;
        }
        .btn-back:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h2 class="text-warning mb-3">Detalles del Usuario</h2>
        <div class="info-box">
            <strong>Nombre:</strong> {{ $usuario->nombre }}
        </div>
        <div class="info-box">
            <strong>Apellidos:</strong> {{ $usuario->apellidos }}
        </div>
        <div class="info-box">
            <strong>Nombre de Usuario:</strong> {{ $usuario->apodo }}
        </div>
        <div class="info-box">
            <strong>Rol:</strong> {{ $usuario->rol }}
        </div>
        <div class="info-box">
            <strong>Edad:</strong> {{ $usuario->edad }} años
        </div>
        <div class="info-box">
            <strong>Maquinas virtuales creadas: </strong> {{ $cantidadMaquinas }}
        </div>
        
        <div class="mt-4">
            <a href="{{ url('/usuarios') }}" class="btn btn-back">Volver</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
