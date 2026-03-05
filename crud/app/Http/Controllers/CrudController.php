<?php
namespace App\Http\Controllers;
use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller {
    public function index() {
        $cruds = Crud::all();
        return view('index', compact('cruds'));
    }

    // Muestra el formulario de creación
public function create()
{
    return view('create');
}
public function destroy($id)
{
    $usuario = \App\Models\Crud::find($id);
    if($usuario){
        $usuario->delete();
    }
    return back();
}
// Recibe los datos del formulario y los guarda
public function store(Request $request)
{
    // Validamos y creamos el registro en la tabla cruds
    \App\Models\Crud::create([
        'codigo' => $request->codigo,
        'nombre' => $request->nombre,
        'correo' => $request->correo,
    ]);
    

    // Al terminar, regresa a la lista principal
    return redirect()->route('usuarios.index');
}
        
}