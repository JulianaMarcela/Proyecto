<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finalizacion extends Model
{
    use HasFactory;
    protected $table = "_finalizacion_utils";
    
    protected $fillable = [
        'avances',
        'fecha_avances',
        'precio',
        'proyecto_id'
    ];
}
