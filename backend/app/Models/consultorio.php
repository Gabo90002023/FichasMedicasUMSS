<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consultorio extends Model
{
    use HasFactory;
    protected $table = 'consultorio';
    protected $primaryKey = 'id_consultorio';

    protected $fillable =[
        "nombre_consultorio",
        "numero",
        "piso",
        "area",
        "estado"
        ];
}
