<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Máquina Virtual</title>
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
            border: none;
            color: white;
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
    <div class="container">
        <h2 class="text-center text-warning mb-3">Editar Máquina Virtual</h2>
        <form action="{{ url('maquinas/'.$maquina->id) }}" method="post">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $maquina->nombre }}" required>
            </div>
            <div class="mb-3">
                <label for="so" class="form-label">Sistema Operativo</label>
                <input type="text" class="form-control" id="so" name="so" value="{{ $maquina->so }}" required>
            </div>
            <div class="mb-3">
                <label for="ram" class="form-label">Memoria RAM (GB)</label>
                <input type="number" class="form-control" id="ram" name="ram" min="2" max="16" value="{{ $maquina->ram }}" required>
            </div>
            <div class="mb-3">
                <label for="cpu" class="form-label">Número de CPUs</label>
                <input type="number" class="form-control" id="cpu" name="cpu" min="1" max="8" value="{{ $maquina->cpu }}" required>
            </div>
            <div class="mb-3">
                <label for="discoduro" class="form-label">Espacio en Disco (GB)</label>
                <input type="number" class="form-control" id="discoduro" name="discoduro" min="60" max="500" value="{{ $maquina->discoduro }}" required>
            </div>
            <div class="mb-3">
                <label for="tipoRed" class="form-label">Tipo de Red</label>
                <select class="form-control" id="tipoRed" name="tipoRed" required>
                    <option value="NAT" {{ $maquina->tipoRed == 'NAT' ? 'selected' : '' }}>NAT</option>
                    <option value="Adaptador Puente" {{ $maquina->tipoRed == 'Adaptador Puente' ? 'selected' : '' }}>Adaptador Puente</option>
                    <option value="Host-Only" {{ $maquina->tipoRed == 'Host-Only' ? 'selected' : '' }}>Host-Only</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha_creacion" class="form-label">Fecha de Creación</label>
                <input type="datetime-local" class="form-control" id="fecha_creacion" name="fecha_creacion" value="{{ $maquina->fecha_creacion }}" required>
            </div>
            <div class="mb-3">
                <label for="id_usuario" class="form-label">ID del Usuario</label>
                <input type="number" class="form-control" id="id_usuario" name="id_usuario" value="{{ $maquina->id_usuario }}" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">✅ Actualizar</button>
                <a href="{{ url('maquinas') }}" class="btn btn-secondary">🔙 Cancelar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
