<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('administrador.index',compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('administrador.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'password' => 'required',
        ]);

        User::create($request->all());
        return redirect()->route('administrador.index')->with('success','Producto creado exitosamente.');
    }

    public function show(User $user)
    {
       
        return view('administrador.show',compact('user'));
    }


    public function edit(User $user)
    {
        return view('administrador.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'user' => 'required',
            'password' => 'required',
        ]);

        $user->update($request->all());
        return redirect()->route('administrador.index')->with('success','Producto modificado exitosamente.');
    }


    public function destroy(User $users)
    {
        $users->delete();
        return redirect()->route('administrador.index')->with('success','Producto eliminado exitosamente.');
    }

// En AdministradorController.php
public function destroy($id)
{
    try {
        $user = User::findOrFail($id);
        $user->delete();
        
        return redirect()->route('administrador.index')
                       ->with('success', 'Usuario eliminado correctamente');
    } catch (\Exception $e) {
        return redirect()->route('administrador.index')
                       ->with('error', 'Error al eliminar usuario: ' . $e->getMessage());
    }
}
}
