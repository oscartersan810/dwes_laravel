<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Usuario</title>
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
        .form-group {
            margin-bottom: 1rem;
        }
        .btn {
            font-size: 1rem;
            padding: 8px 16px;
            border-radius: 6px;
        }
        .form-control {
            background-color: #2c3e50;
            color: white;
            border: 1px solid #34495e;
        }
        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 8px rgba(52, 152, 219, 0.5);
        }
        .btn-submit {
            background-color: #3498db;
            color: white;
        }
        .btn-submit:hover {
            background-color: #2980b9;
        }
        .btn-back {
            background-color: #e74c3c;
            color: white;
        }
        .btn-back:hover {
            background-color: #c0392b;
        }
        @media (max-width: 768px) {
            .btn {
                font-size: 0.9rem;
                padding: 6px 12px;
            }
            .form-control {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center text-warning mb-3">Nuevo Usuario</h2>
        <form action="{{ url('/usuarios') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="apodo">Nombre Usuario</label>
                <input type="text" id="apodo" name="apodo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="rol">Rol</label>
                <select id="rol" name="rol" class="form-control" required>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" id="edad" name="edad" class="form-control" required>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-submit">Crear Usuario</button>
                <a href="{{ url('/usuarios') }}" class="btn btn-back">Cancelar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
