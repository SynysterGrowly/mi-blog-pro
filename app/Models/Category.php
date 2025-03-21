<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $table = 'categorias';


    protected $fillable = ['nombre', 'descripcion', 'imagen'];

    public function entradas()
    {
        return $this->hasmany(Entrada::class, 'categoria_id');
    }
}
