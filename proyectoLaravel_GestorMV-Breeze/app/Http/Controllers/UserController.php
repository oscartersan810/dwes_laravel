<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
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
            'email' => 'required',
            'edad' => 'required',
            'rol' => 'required',
            'password' => 'required'
        ]);

        $usuario = new Usuario();

        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->apodo = $request->input('apodo');
        $usuario->email = $request->input('email');
        $usuario->edad = $request->input('edad');
        $usuario->rol = $request->input('rol');
        $usuario->password = $request->input('password');

        $usuario->save();

        return view("usuarios.message", data: ['message' => 'Usuario creado correctamente']);
    }

    public function show($id){
        $usuario = Usuario::with('maquinas')->findOrFail($id);
        $cantidadMaquinas = $usuario->maquinas->count(); 
    
        return view('usuarios.detalleusuario', [
            'usuario' => $usuario,
            'cantidadMaquinas' => $cantidadMaquinas
        ]);
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
            'email' => 'required',
            'edad' => 'required',
            'rol' => 'required',
            'password' => 'required'
        ]);

        $usuario = Usuario::find($id);

        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->apodo = $request->input('apodo');
        $usuario->email = $request->input('email');
        $usuario->edad = $request->input('edad');
        $usuario->rol = $request->input('rol');
        $usuario->password = $request->input('password');

        $usuario->save();

        return view("usuarios.message", data: ['message' => 'Usuario actualizado correctamente']);
    }

    public function destroy($id){
        $usuario = Usuario::find($id);
        $usuario->delete();

        return view("usuarios.message", data: ['message' => 'Usuario eliminado correctamente']);
    }
}
