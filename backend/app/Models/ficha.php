<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ficha extends Model
{
    use HasFactory;
    protected $table = 'ficha';
    protected $primaryKey = 'id_ficha';

    protected $fillable =[
        "hora",
        "fecha",
        "estudio",
        "id_doctor",
        "id_consutorio",
        "id_paciente",
        "estado"
    ];
}
