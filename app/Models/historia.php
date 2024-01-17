<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historia extends Model
{
    use HasFactory;
    protected $fillable = [
        'Documento_Paciente',
        'Nombre_Apellido',
        'Medico_Tratante',
        'Matricula',
        'Fecha',
        'Tratamiento',
    ];
    public  function historias(){
        return $this->hasMany(historia::class, 'Matricula','Matricula');
    }

    
}
