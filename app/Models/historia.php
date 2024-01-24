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
    public  function historia(){
        return $this->hasMany(historia::class, 'Matricula','Matricula');
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'Documento_Paciente', 'dni');
    }  
    public function medico()
    {
        return $this->belongsTo(Medico::class, 'Medico_Tratante', 'nombre');
    }
}
