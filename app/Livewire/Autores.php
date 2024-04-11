<?php

namespace App\Livewire;

use App\Models\Autor;
use Livewire\Component;

class Autores extends Component
{

    public $nombre;
    public $apellido;
    public $autores;

    public function mount(){
        /* carga el componente */
        /*$this->autores = Autor::all();*/
        $this->autores = Autor::paginate(2);
    }


    public function agregarAutor(){
        $this->validate([
            'nombre'=>'required',
            'apellido'=>'required'
        ]);

        $newAutor = Autor::create([
            'nombre'=>$this->nombre,
            'apellido'=>$this->apellido
        ]);
        $this->nombre='';
        $this->apellido='';

        $this->autores[]=$newAutor;

        //Emitir evento
        $this->dispatch('autorAgregado',['id' => $newAutor->id]);
    }

    public function render()
    {
        return view('livewire.autores');
    }
}
