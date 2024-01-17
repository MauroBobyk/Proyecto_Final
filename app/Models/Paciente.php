<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';
    protected $fillable = [
        'name', 'dni', 'edad','fecha_nac',
    ];

    public function historialesMedicos()
    {
        return $this->hasMany(historia::class, 'Documento_Paciente', 'documento');
    }
}
