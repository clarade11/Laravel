<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Muestra los préstamos del usuario actual.
     */
    public function misPrestamos(Request $request)
    {
        $prestamos = $request->user()->prestamos;
        return view('prestamos-autenticado', ['prestamos' => $prestamos]);
    }
}
