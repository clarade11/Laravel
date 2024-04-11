<!DOCTYPE html>
<html>
<head>
    <title>Mis Préstamos</title>
</head>
<body>
    <h1>Mis Préstamos</h1>
    <ul>
        @foreach ($prestamos as $prestamo)
            <li>{{ $prestamo->descripcion }}</li>
        @endforeach
    </ul>
</body>
</html>
