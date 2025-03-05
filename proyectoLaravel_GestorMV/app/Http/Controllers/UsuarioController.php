<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();
        return view ('usuarios.lista', data: ['usuarios' => $usuarios]);
    }

    public function create(){
        return view('usuarios.nuevousuario');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'apodo' => 'required',
            'edad' => 'required',
            'rol' => 'required',
        ]);

        $usuario = new Usuario();

        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->apodo = $request->input('apodo');
        $usuario->edad = $request->input('edad');
        $usuario->rol = $request->input('rol');

        $usuario->save();

        return view("message", data: ['message' => 'Usuario creado correctamente']);
    }

    public function show($id){
        $usuario = Usuario::find($id);
        return view('usuarios.detalleusuario', data: ['usuario' => $usuario]);
    }

    public function edit($id){
        $usuario = Usuario::find($id);
        return view('usuarios.editausuario', data: ['usuario' => $usuario]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'apodo' => 'required',
            'edad' => 'required',
            'rol' => 'required',
        ]);

        $usuario = Usuario::find($id);

        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->apodo = $request->input('apodo');
        $usuario->edad = $request->input('edad');
        $usuario->rol = $request->input('rol');

        $usuario->save();

        return view("message", data: ['message' => 'Usuario actualizado correctamente']);
    }

    public function destroy($id){
        $usuario = Usuario::find($id);
        $usuario->delete();

        return view("message", data: ['message' => 'Usuario eliminado correctamente']);
    }
}
