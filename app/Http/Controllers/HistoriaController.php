<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historia;
use App\Models\Paciente;
use App\Models\Medico;

class HistoriaController extends Controller{
    
    
    
    public function index()
    {
      
        return view('historia.index');
    }

    public function create()
    {
        return view('historia.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'Documento_Paciente' => 'required',
    'Nombre_Apellido' => 'required',
    'Medico_Tratante' => 'required|exists:medicos,id',
    'Matricula' => 'required',
    'Fecha' => 'required|date',
    'Tratamiento' => 'required',
        ]);

        historia::create($request->all());
        return redirect()->route('historia.index')->with('success','historia creada exitosamente.');
    }

    public function show(historia $medico)
    {
        return view('historia.show',compact('medico'));
    }


    public function edit(historia $medico)
    {
        
        return view('historia.edit',compact('medico', 'especialidades'));
    }

    public function update(Request $request, historia $historias)
    {
      
        $request->validate([
            'Documento_Paciente' => 'required',
            'Nombre_Apellido' => 'required',
            'Medico_Tratante' => 'required|exists:medicos,id',
            'Matricula' => 'required',
            'Fecha' => 'required|date',
            'Tratamiento' => 'required',
        ]);

        $historias->update($request->all());
        
        return redirect()->route('medicos.index')->with('success','Medico modificado exitosamente.');
    }


    public function destroy(historia $historias)
    {
        $historias->delete();
        return redirect()->route('medicos.index')->with('success','Medico eliminado exitosamente.');
    }

}