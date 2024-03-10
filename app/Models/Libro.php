<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table= 'libros';
    //protected $fillable =['id', 'titulo', 'autor', 'anyo_publi', 'genero', 'disponible'];//para q los select solo cojan estos campos

    public static function obtenerLibros(){
        return Libro::all();//devuelve todo
    }

    public static function getLibroID($id){
        return Libro::find($id); //busca por clave primaria
    }

    public static function getLibroTitulo($titulo){
        return Libro::where('titulo','=',$titulo); //busca por titulo
    }

    public static function guardarLibro($titulo, $autor, $anyo_publi, $genero, $disponible){
        $libro = new Libro;
        $libro->titulo=$titulo;
        $libro->autor=$autor;
        $libro->anyo_publi=$anyo_publi;
        $libro->genero=$genero;
        $libro->disponible=$disponible;
        $libro->save();

        return $libro->id;//asi podemos saber el id
    }

    public static function actualizarLibro($id,$titulo, $autor, $anyo_publi, $genero, $disponible){
        $libro = Libro::find($id);
        if(isset($libro)){ // = libro!=null en java
            $libro->titulo=$titulo;
            $libro->autor=$autor;
            $libro->anyo_publi=$anyo_publi;
            $libro->genero=$genero;
            $libro->disponible=$disponible;
            $libro->save();

            return $libro->id;
        }
        return "No se ha encontrado el libro con el id: "+$id;
    }

    public static function borrarLibro($id){
        $libro = Libro::find($id);
        if(isset($libro)){ // = libro!=null en java
            $libro->delete();
            return "Libro borrado correctamente";
        }
        return "No se ha encontrado el libro con el id: "+$id;
    }
}
