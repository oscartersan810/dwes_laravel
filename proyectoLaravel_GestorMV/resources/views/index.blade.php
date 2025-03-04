<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Máquinas Virtuales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }
        .table-hover tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4 text-warning">Lista de Máquinas Virtuales</h1>
        <div class="text-center mb-3">
            <a href="{{url('maquinas/create')}}" class="btn btn-success">➕ Nueva Máquina Virtual</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white">
                <thead class="table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Sistema Operativo</th>
                        <th>Memoria RAM</th>
                        <th>CPU</th>
                        <th>Disco Duro</th>
                        <th>Tipo de Red</th>
                        <th>Creación</th>
                        <th>Usuario</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($maquinas as $maquina)
                    <tr>
                        <td>{{ $maquina->id }}</td>
                        <td>{{ $maquina->nombre }}</td>
                        <td>{{ $maquina->so }}</td>
                        <td>{{ $maquina->ram }} GB</td>
                        <td>{{ $maquina->cpu }} núcleos</td>
                        <td>{{ $maquina->discoduro }} GB</td>
                        <td>{{ $maquina->tipoRed }}</td>
                        <td>{{ $maquina->fecha_creacion }}</td>
                        <td>{{ $maquina->id_usuario }}</td>
                        <td>
                            <a href="{{ url('maquinas/'.$maquina->id.'/edit') }}" class="btn btn-warning btn-sm">✏️ Editar</a>
                        </td>
                        <td>
                            <form action="{{ url('maquinas/'.$maquina->id) }}" method="post">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">🗑️ Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
