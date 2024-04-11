<!DOCTYPE html>
<html>
<head>
    <title>Añadir Préstamo</title>
</head>
<body>
    <h1>Añadir Préstamo</h1>
    <form method="POST" action="/prestamos">
        @csrf
        <label for="book_id">Libro:</label>
        <input type="text" name="book_id" id="book_id">

        @csrf
        <label for="fecha_prestamo">Fecha prestamo:</label>
        <input type="date" name="fecha_prestamo" id="fecha_prestamo">

        @csrf
        <label for="user_id">Usuario:</label>
        <input type="text" name="user_id" id="user_id">



        <button type="submit">Enviar solicitud</button>
    </form>
</body>
</html>
