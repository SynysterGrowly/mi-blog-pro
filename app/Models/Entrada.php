<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Entrada extends Model
{
    use HasFactory;


    protected $table = 'entradas';
    protected $guarded = [];

    protected $fillable = ['titulo', 'descripcion' ,'contenido', 'imagen' ,'categoria_id', 'fecha_publicacion','estado','usuario_id' ];
public $timestamps = false;
}
