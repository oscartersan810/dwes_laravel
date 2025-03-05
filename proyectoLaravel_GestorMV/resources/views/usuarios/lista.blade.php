<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Usuarios</title>
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
        <h2 class="text-center text-warning mb-3">Lista de Usuarios</h2>
        <table class="table table-bordered table-hover text-white text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Apodo</th>
                    <th>Rol</th>
                    <th>Edad</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellidos }}</td>
                    <td>{{ $usuario->apodo }}</td>
                    <td>{{ $usuario->rol }}</td>
                    <td>{{ $usuario->edad }}</td>
                    <td>{{ $usuario->created_at }}</td>
                    <td class="action-buttons">
                        <a href="{{ url('usuarios/'.$usuario->id. '/detalleusuario') }}" class="btn btn-info btn-sm">🔍</a>
                        <a href="{{ url('usuarios/'.$usuario->id.'/editausuario') }}" class="btn btn-warning btn-sm">✏️</a>
                        <form action="{{ url('usuarios/'.$usuario->id) }}" method="post" style="display:inline;">
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
            <a href="{{url('usuarios/nuevousuario')}}" class="btn btn-success me-2">➕ Nuevo Usuario</a>
            <a href="{{url('maquina')}}" class="btn btn-primary">💻 Ver Máquinas Virtuales</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
