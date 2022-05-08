<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductosTienda extends Model
{
    use HasFactory;
    protected $table="productos";
    protected $fillable=['nombre','descripcion','categoria','existencias'];
}
