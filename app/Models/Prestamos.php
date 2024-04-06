<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    use HasFactory;
    protected $table= 'prestamos';
    //protected $fillable =['id', 'titulo', 'autor', 'anyo_publi', 'genero', 'disponible'];//para q los select solo cojan estos campos

    public static function obtenerPrestamos(){
        return Prestamos::all();//devuelve todo
    }

    public static function getPrestamoID($id){
        return Prestamos::find($id); //busca por clave primaria
    }

    public static function getPrestamoLibro($book_id){
        return Prestamos::where('book_id','=',$book_id); //busca por libro
    }

    public static function guardarPrestamo($user_id, $book_id, $fecha_prestamo, $devuelto, $fecha_devolucion){
        $prestamo = new Prestamos;
        $prestamo->user_id=$user_id;
        $prestamo->book_id=$book_id;
        $prestamo->fecha_prestamo=$fecha_prestamo;
        $prestamo->devuelto=$devuelto;
        $prestamo->fecha_devolucion=$fecha_devolucion;
        $prestamo->save();

        return $prestamo->id;//asi podemos saber el id
    }

    public static function actualizarPrestamo($id,$user_id, $book_id, $fecha_prestamo, $devuelto, $fecha_devolucion){
        $libro = Libro::find($book_id);
        $prestamo = Prestamos::find($id);
        if(isset($libro->disponible) && isset($prestamo)){ // = si disponible está relleno lo tomamos como q si
            $prestamo->user_id=$user_id;
            $prestamo->book_id=$book_id;
            $prestamo->fecha_prestamo=$fecha_prestamo;
            $prestamo->devuelto=$devuelto;
            $prestamo->fecha_devolucion=$fecha_devolucion;
            $prestamo->save();

            return $prestamo->id;
        }
        return "No se ha encontrado el prestamo con el id: "+$id +" o el libro con el id "+$book_id +" no está disponible";
    }

    public static function borrarPrestamo($id){
        $prestamo = Prestamos::find($id);
        if(isset($prestamo)){ // = prestamo!=null en java
            $prestamo->delete();
            return "prestamo borrado correctamente";
        }
        return "No se ha encontrado el prestamo con el id: "+$id;
    }
}
