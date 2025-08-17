<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form method="POST" action="{{ url('/api/register') }}">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required>



        <label>Correo:</label>
        <input type="email" name="correo" required>



        <label>Clave:</label>
        <input type="password" name="clave" required>



        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
