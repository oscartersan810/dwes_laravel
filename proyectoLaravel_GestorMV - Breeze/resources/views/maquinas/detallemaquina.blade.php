<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de Máquina Virtual</title>
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
        }
        .container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.6);
            width: 90%;
            max-width: 600px;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border: none;
            color: white;
        }

        .info-box{
            background-color: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .info-box:hover{
            background-color: rgba(221, 216, 216, 0.575);
            cursor: pointer;
        }
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }
        .btn {
            font-size: 1rem;
            padding: 10px;
            border-radius: 6px;
        }
        .btn-primary {
            background-color: #1e90ff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #1c86ee;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h2 class="text-warning mb-3">Detalles de Máquina Virtual</h2>

        <div class="info-box">
            <strong>Nombre de la Maquina: </strong>{{ $maquina->nombre }}
        </div>
        <div class="info-box">
            <strong>Sistema Operativo: </strong>{{ $maquina->so }}
        </div>
        <div class="info-box">
            <strong>Memoria RAM (GB): </strong>{{ $maquina->ram }}
        </div>
        <div class="info-box">
            <strong>Nucleos de CPUs: </strong>{{ $maquina->cpu }}
        </div>
        <div class="info-box">
            <strong>Espacio en Disco (GB): </strong>{{ $maquina->discoduro }}
        </div>
        <div class="info-box">
            <strong>Tipo de Red: </strong>{{ $maquina->tipoRed }}
        </div>
        <div class="info-box">
            <strong>Fecha de Creación: </strong>{{ $maquina->fecha_creacion }}
        </div>
        <div class="info-box">
            <strong>Usuario: </strong>{{ $maquina->usuario->nombre ?? 'No asignado' }}
        </div>
        
        <div class="text-center mt-4">
            <a href="{{ url('maquinas') }}" class="btn btn-secondary">🔙 Volver</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
