<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    protected $table = 'doctor';
    protected $primaryKey = 'id_doctor';

    protected $fillable =[
        "nombre_doctor",
        "apellido_paterno",
        "apellido_materno",
        "codigo",
        "telefono",
        "especialidad",
        "canet_identidad",
        "estado"
    ];
}
