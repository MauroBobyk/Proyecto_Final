<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historia;

class HistoriaController extends Controller
{
    public function index()
    {
        $historia = historia::latest()->paginate(5);
        return view('historia.index',compact('historia'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('historia.create');
    }

    public function store(Request $request)
    {
        $request->validate([
          
        ]);

        historia::create($request->all());
        return redirect()->route('historia.index')->with('success','Producto creado exitosamente.');
    }

    public function show(historia $historia)
    {
       
        return view('historia.show',compact('historia'));
    }

    public function destroy(historia $historia)
    {
        $historia->delete();
        return redirect()->route('historia.index')->with('success','Producto eliminado exitosamente.');
    }
}
