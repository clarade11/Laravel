
<div>
<div class="container">
        <h1>Lista de autores</h1>
       <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($autores as $autor)
            <tr>
                <td>{{$autor->id}}</td>
                <td>{{$autor->nombre}}</td>
                <td>{{$autor->apellido}}</td>
            </tr>
        </tbody>
        @endforeach
       </table>
       {{$autores->links()}}

    </div>
    <div wire:click="render">
        <p>Holis</p>
    </div>
    <h3>Agregar usuario</h3>
    <form wire:submit.prevent="agregarAutor">
        @csrf
        <label for="nombre">Nombre</label>
        <input wire:model="nombre" type="text" required>

        <label for="apellido">Apellido</label>
        <input wire:model="apellido" type="text" required>

        <button type="submit">Guardar</button>

    </form>
</div>

<script>
    document.addEventListener('livewire:init', function(){
        Livewire.on('autorAgregado', function(id){
            alert('Se ha agregado');
        })
    });
</script>


