<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroCRUDController extends Controller
{
    public function mostrarFormularioAdd(){
        return view('addLibro');
    }

    public function addLibro(Request $request){
        return Libro::guardarLibro($request->input('titulo'),$request->input('autor'),
        $request->input('anyo_publi'),$request->input('genero'),$request->input('disponible'));
    }

}
