<form action="{{ route('addLibro') }}" method="POST">
    @csrf
    <label for="">Titulo</label>
    <input type="text" name="titulo">
    <label for="">Autor</label>
    <input type="text" name="autor">
    <label for="">Año publicacion</label>
    <input type="number" name="anyo_publi">
    <label for="">Genero</label>
    <input type="text" name="genero">
    <label for="">Disponible</label>
    <input type="text" name="disponible">

    <button type="submit">Guardar libro</button>

</form>
