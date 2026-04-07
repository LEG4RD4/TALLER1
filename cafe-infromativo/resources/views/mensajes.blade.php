@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')
<h2 class="text-center mb-4">Mensajes recibidos</h2>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th>Mensaje</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        @forelse($mensaje as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->correo }}</td>
                <td>{{ $item->tipo }}</td>
                <td>{{ $item->mensaje }}</td>
                <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">No hay mensajes aún.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection