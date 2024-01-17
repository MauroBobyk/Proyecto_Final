<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;
class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::latest()->paginate(5);
        return view('medicos.index',compact('medicos'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $especialidades = [
            'Seleccione Especialidad' => 'Seleccione Especialidad',
            'cirujano' => 'Cirujano',
            'dentista_general' => 'Dentista General',
            'periodoncista' => 'Periodoncista',
            'odontopediatra' => 'Odontopediatra',
        ];
    
        return view('medicos.create', compact('especialidades'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'nombre'=> 'required',
            'matricula'=> 'required',
            'especialidad'=> 'required',
            'fecha_ingreso'=> 'required',
        ]);

        Medico::create($request->all());
        return redirect()->route('medicos.index')->with('success','medicos creado exitosamente.');
    }

    public function show(Medico $medico)
    {
        return view('medicos.show',compact('medico'));
    }


    public function edit(Medico $medico)
    {
        $especialidades = [
            'Seleccione Especialidad' => 'Seleccione Especialidad',
            'cirujano' => 'Cirujano',
            'dentista_general' => 'Dentista General',
            'periodoncista' => 'Periodoncista',
            'odontopediatra' => 'Odontopediatra',
        ];
        return view('medicos.edit',compact('medico', 'especialidades'));
    }

    public function update(Request $request, Medico $medico)
    {
      
        $request->validate([
            'nombre'=> 'required',
            'matricula'=> 'required',
            'especialidad'=> 'required',
        ]);

        $medico->update($request->all());
        
        return redirect()->route('medicos.index')->with('success','Medico modificado exitosamente.');
    }


    public function destroy(Medico $medico)
    {
        $medico->delete();
        return redirect()->route('medicos.index')->with('success','Medico eliminado exitosamente.');
    }
}
