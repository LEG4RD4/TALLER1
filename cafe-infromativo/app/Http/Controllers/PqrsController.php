<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Illuminate\Http\Request;

class PqrsController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'  => 'required|string|max:255',
            'correo'  => 'required|email|max:255',
            'tipo'    => 'required|in:Petición,Queja,Reclamo,Sugerencia',
            'mensaje' => 'required|string|min:10',
        ], [
            'nombre.required'  => 'El nombre es obligatorio.',
            'correo.required'  => 'El correo es obligatorio.',
            'correo.email'     => 'Ingresa un correo válido.',
            'tipo.required'    => 'Selecciona el tipo de solicitud.',
            'mensaje.required' => 'El mensaje es obligatorio.',
            'mensaje.min'      => 'El mensaje debe tener al menos 10 caracteres.',
        ]);

        Pqrs::create($validated);

        return redirect()->back()->with('pqrs_success', '¡Tu solicitud fue enviada correctamente!');
    }
}