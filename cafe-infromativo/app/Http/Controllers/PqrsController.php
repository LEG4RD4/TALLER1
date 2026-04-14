<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Illuminate\Http\Request;

class PqrsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombres'   => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'correos'   => 'required|email',
            'tipo'      => 'required|in:Queja,Petición,Felicitación',
            'mensaje'   => 'required|string',
            'acepto'    => 'accepted', // Obliga a marcarlo, pero no lo guardaremos
        ]);

        // Guardamos solo los campos que existen en tu imagen de la base de datos
        Pqrs::create([
            'nombres'   => $request->nombres,
            'apellidos' => $request->apellidos,
            'correo'    => $request->correos, // Mapea el input 'correos' a la columna 'correo'
            'tipo'      => $request->tipo,
            'mensaje'   => $request->mensaje,
        ]);

        return redirect()->route('nosotros')->with('success', 'Mensaje enviado correctamente');
    }

    public function index()
    {
        $mensajes = Pqrs::orderBy('id', 'desc')->get();
        return view('mensajes', compact('mensajes'));
    }

    public function edit($id)
    {
        $mensaje = Pqrs::findOrFail($id);
        return view('editar_mensaje', compact('mensaje'));
    }

    public function update(Request $request, $id)
    {
        $mensaje = Pqrs::findOrFail($id);

        $request->validate([
            'nombres'   => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'correos'   => 'required|email',
            'tipo'      => 'required|in:Queja,Petición,Felicitación',
            'mensaje'   => 'required|string',
        ]);

        $mensaje->update([
            'nombres'   => $request->nombres,
            'apellidos' => $request->apellidos,
            'correo'    => $request->correos,
            'tipo'      => $request->tipo,
            'mensaje'   => $request->mensaje,
        ]);

        return redirect()->route('mensajes.index')->with('success', 'Mensaje actualizado con éxito');
    }

    public function destroy($id)
    {
        $mensaje = Pqrs::findOrFail($id);
        $mensaje->delete();

        return redirect()->route('mensajes.index')->with('success', 'Mensaje eliminado correctamente');
    }
}