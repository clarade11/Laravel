<?php

namespace App\Http\Controllers;

use App\Models\Prestamos;
use Illuminate\Http\Request;

class PrestamosCRUDController extends Controller
{
    protected $prestamo;

    public function __construct(Prestamos $prestamo){
        $this->prestamo = $prestamo;

    }

    public function mostrarFormularioAdd(){
        return view('addPrestamo');
    }

    public function mostrarFormularioActualizar(){
        return view('actualizarPrestamo');
    }

    public function addPrestamo(Request $request){
        return Prestamos::guardarPrestamo($request->input('book_id'),$request->input('user_id'),
        $request->input('fecha_prestamo'),'N',NULL);
    }

    public function showPrestamos(){
        $allPrestamos = $this->prestamo->obtenerPrestamos();
        return view('mostrarPrestamo', ['prestamos'=>$allPrestamos]);
    }

    public function verPrestamo(Request $request ){
        return view('verPrestamo', ['prestamo'=>Prestamos::getPrestamoLibro($request->input('book_id'))]);
    }

    public function actualizarPrestamo(Request $request){
        return Prestamos::actualizarPrestamo($request->input('id'),$request->input('titulo'),
        $request->input('autor'),$request->input('anyo_publi'),$request->input('genero'),$request->input('disponible'));
    }

}
