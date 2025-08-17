<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
</head>
<body>
    <h2>Inicio de Sesión</h2>
    <form method="POST" action="{{ url('/api/login') }}">
        @csrf
        <label>Correo:</label>
        <input type="email" name="correo" required>



        <label>Clave:</label>
        <input type="password" name="clave" required>



        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
