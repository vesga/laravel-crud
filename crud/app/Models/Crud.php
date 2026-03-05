<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model {
    protected $table = 'cruds'; // Nombre de la tabla en la migración
    protected $fillable = ['codigo', 'nombre', 'correo'];
}