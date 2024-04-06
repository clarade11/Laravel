<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroCRUDController extends Controller
{
    protected $libro;

    public function __construct(Libro $libro){
        $this->libro = $libro;

    }

    public function mostrarFormularioAdd(){
        return view('addLibro');
    }

    public function mostrarFormularioActualizar(){
        return view('actualizarLibro');
    }

    public function addLibro(Request $request){
        return Libro::guardarLibro($request->input('titulo'),$request->input('autor'),
        $request->input('anyo_publi'),$request->input('genero'),$request->input('disponible'));
    }

    public function showLibros(){
        $allLibros = $this->libro->obtenerLibros();
        return view('mostrarLibro', ['libros'=>$allLibros]);
    }

    public function verLibro(Request $request ){
        return view('verLibro', ['libro'=>Libro::getLibroTitulo($request->input('titulo'))]);
    }

    public function actualizarLibro(Request $request){
        return Libro::actualizarLibro($request->input('id'),$request->input('titulo'),
        $request->input('autor'),$request->input('anyo_publi'),$request->input('genero'),$request->input('disponible'));
    }

}
