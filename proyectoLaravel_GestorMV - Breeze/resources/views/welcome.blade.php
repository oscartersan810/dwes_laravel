<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
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
            max-width: 600px;
        }
        h1 {
            color: #f1c40f;
            margin-bottom: 20px;
        }
        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
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
        @media (min-width: 576px) {
            .btn-group {
                flex-direction: row;
                justify-content: center;
            }
            .btn {
                width: 45%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido al Gestor de Máquinas Virtuales</h1>
        <p>Elige una de las opciones a continuación para continuar:</p>
        <div class="btn-group">
            <a href="{{ url('maquinas') }}" class="btn btn-warning">🖥️ Tabla de Máquinas</a>
            <a href="{{ url('usuarios') }}" class="btn btn-primary">👤 Tabla de Usuarios</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>