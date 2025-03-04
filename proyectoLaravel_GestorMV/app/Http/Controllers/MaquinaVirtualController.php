<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MaquinasVirtuales;
use Illuminate\Http\Request;

class MaquinaVirtualController extends Controller
{
    public function index(){
        $maquinas = MaquinasVirtuales::all();
        return view ('index', data: ['maquinas' => $maquinas]);
    }

    public function create(){
        return view('nuevamaquina');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'so' => 'required',
            'ram' => 'required',
            'cpu' => 'required',
            'discoduro' => 'required',
            'tipoRed' => 'required',
            'fecha_creacion' => 'required',
            'usuario_id' => 'required',
        ]);

        $maquina = new MaquinasVirtuales();

        $maquina->nombre = $request->input('nombre');
        $maquina->so = $request->input('so');
        $maquina->ram = $request->input('ram');
        $maquina->cpu = $request->input('cpu');
        $maquina->discoduro = $request->input('discoduro');
        $maquina->tipoRed = $request->input('tipoRed');
        $maquina->fecha_creacion = $request->input('fecha_creacion');
        $maquina->usuario_id = $request->input('usuario_id');

        $maquina->save();

        return view("message", data: ['message' => 'Máquina virtual creada correctamente']);
    }

    public function show($id){
        $maquina = MaquinasVirtuales::find($id);
        return view('detallemaquina', data: ['maquina' => $maquina]);
    }

    public function edit($id){
        $maquina = MaquinasVirtuales::find($id);
        return view('editamaquina', data: ['maquina' => $maquina]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nombre' => 'required',
            'so' => 'required',
            'ram' => 'required',
            'cpu' => 'required',
            'discoduro' => 'required',
            'tipoRed' => 'required',
            'fecha_creacion' => 'required',
            'usuario_id' => 'required',
        ]);

        $maquina = MaquinasVirtuales::find($id);

        $maquina->nombre = $request->input('nombre');
        $maquina->so = $request->input('so');
        $maquina->ram = $request->input('ram');
        $maquina->cpu = $request->input('cpu');
        $maquina->discoduro = $request->input('discoduro');
        $maquina->tipoRed = $request->input('tipoRed');
        $maquina->fecha_creacion = $request->input('fecha_creacion');
        $maquina->usuario_id = $request->input('usuario_id');

        $maquina->save();

        return view("message", data: ['message' => 'Máquina virtual actualizada correctamente']);
    }

    public function destroy($id){
        $maquina = MaquinasVirtuales::find($id);
        $maquina->delete();

        return view("message", data: ['message' => 'Máquina virtual eliminada correctamente']);
    }
}
