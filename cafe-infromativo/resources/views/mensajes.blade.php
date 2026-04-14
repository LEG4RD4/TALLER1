@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')
<h2 class="text-center mb-4">Mensajes recibidos</h2>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correos</th>
            <th>Tipo</th>
            <th>Mensaje</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($mensajes as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nombres }}</td>
                <td>{{ $item->apellidos }}</td>
                <td>{{ $item->correo }}</td>
                <td>{{ $item->tipo }}</td>
                <td>{{ $item->mensaje }}</td>
                <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
                <td>
                    <a href="{{ route('mensajes.edit', $item->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('mensajes.destroy', $item->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este mensaje?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="text-center">No hay mensajes aún.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection