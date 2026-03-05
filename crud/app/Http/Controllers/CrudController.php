<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Muestra la lista de todos los usuarios.
     */
    public function index()
    {
        $cruds = Crud::all();
        return view('index', compact('cruds'));
    }

    /**
     * Muestra el formulario para crear un nuevo registro.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Guarda el nuevo registro en la base de datos.
     */
    public function store(Request $request)
    {
        // Creamos el registro usando los datos del formulario
        Crud::create([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'correo' => $request->correo,
        ]);

        return redirect()->route('usuarios.index');
    }

    /**
     * Muestra el formulario para editar un registro existente.
     */
    public function edit($id)
    {
        // Buscamos el usuario por su ID
        $usuario = Crud::findOrFail($id);
        
        // Retornamos la vista 'edit' pasando la información del usuario
        return view('edit', compact('usuario'));
    }

    /**
     * Actualiza el registro en la base de datos.
     */
    public function update(Request $request, $id)
    {
        // Buscamos el registro
        $usuario = Crud::findOrFail($id);

        // Actualizamos con los nuevos datos del formulario
        $usuario->update([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'correo' => $request->correo,
        ]);

        return redirect()->route('usuarios.index');
    }

    /**
     * Elimina un registro de la base de datos.
     */
    public function destroy($id)
    {
        $usuario = Crud::find($id);
        
        if ($usuario) {
            $usuario->delete();
        }

        return redirect()->route('usuarios.index');
    }
}