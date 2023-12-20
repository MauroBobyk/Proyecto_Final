<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{

    public function index()
    {
        $pacientes = Paciente::latest()->paginate(5);
        return view('pacientes.index',compact('pacientes'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'dni' => 'required',
            'edad' => 'required',
        ]);

        Paciente::create($request->all());
        return redirect()->route('pacientes.index')->with('success','Producto creado exitosamente.');
    }

    public function show(Paciente $paciente)
    {
        return view('pacientes.show',compact('paciente'));
    }


    public function edit(Paciente $paciente)
    {
        return view('pacientes.edit',compact('paciente'));
    }

    public function update(Request $request, Paciente $pacientes)
    {
        $request->validate([
            'name' => 'required',
            'dni' => 'required',
            'edad' => 'required',
        ]);

        $pacientes->update($request->all());
        return redirect()->route('pacientes.index')->with('success','Producto modificado exitosamente.');
    }


    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect()->route('pacientes.index')->with('success','Producto eliminado exitosamente.');
    }
}
