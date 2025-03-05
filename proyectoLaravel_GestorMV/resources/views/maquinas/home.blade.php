<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Máquinas Virtuales</title>
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
            max-width: 1100px;
        }
        table {
            border-radius: 8px;
            overflow: hidden;
            font-size: 1rem;
            width: 100%;
        }
        .table-hover tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        .btn {
            font-size: 0.9rem;
            padding: 6px 12px;
            border-radius: 6px;
        }
        .btn-sm {
            padding: 5px 10px;
        }
        .action-buttons {
            display: flex;
            gap: 8px;
            justify-content: center;
        }
        @media (max-width: 768px) {
            .btn {
                font-size: 0.8rem;
                padding: 4px 8px;
            }
            table {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center text-warning mb-3">Lista de Máquinas Virtuales</h2>
        <table class="table table-bordered table-hover text-white text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>SO</th>
                    <th>RAM</th>
                    <th>CPU</th>
                    <th>Disco</th>
                    <th>Red</th>
                    <th>Fecha Creacion</th>
                    <th>ID Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($maquinas as $maquina)
                <tr>
                    <td>{{ $maquina->id }}</td>
                    <td>{{ $maquina->nombre }}</td>
                    <td>{{ $maquina->so }}</td>
                    <td>{{ $maquina->ram }} GB</td>
                    <td>{{ $maquina->cpu }} Núcleos</td>
                    <td>{{ $maquina->discoduro }} GB</td>
                    <td>{{ $maquina->tipoRed }}</td>
                    <td>{{ $maquina->fecha_creacion }}</td>
                    <td>{{ $maquina->id_usuario }}</td>
                    <td class="action-buttons">
                        <a href="{{ url('maquinas/'.$maquina->id.'/detallemaquina') }}" class="btn btn-info btn-sm">🔍</a>
                        <a href="{{ url('maquinas/'.$maquina->id.'/editamaquina') }}" class="btn btn-warning btn-sm">✏️</a>
                        <form action="{{ url('maquinas/'.$maquina->id) }}" method="post" style="display:inline;">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">🗑️</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center mt-3">
            <a href="{{url('maquinas/nuevamaquina')}}" class="btn btn-success me-2">➕ Nueva Máquina</a>
            <a href="{{url('/')}}" class="btn btn-primary">🏠 Volver a Inicio</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
