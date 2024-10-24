<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    use HasFactory;
    protected $table = 'paciente';
    protected $primaryKey = 'id_paciente';

    protected $fillable =[
        "nombre_paciente",
        "apellido_paterno",
        "apellido_materno",
        "correo_electronico_personal",
        "correo_institucional",
        "direccion",
        "telefono",
        "tipo_paciente",
        "canet_identidad",
        "estado"
    ];
}
