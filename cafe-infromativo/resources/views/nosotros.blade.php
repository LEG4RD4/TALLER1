@extends('layouts.app')
@section('title', 'Nosotros')
@section('content')

<style>
    h2 { font-size: 32px; margin-bottom: 20px; border-bottom: 3px solid #f5c842; padding-bottom: 10px; }
    .fila { display: flex; gap: 30px; align-items: center; margin-bottom: 40px; }
    .fila img { width: 420px; height: 260px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.2); }
    .fila p { font-size: 17px; line-height: 1.8; }

    .pqrs { background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); }
    .pqrs h4 { font-size: 22px; margin-bottom: 20px; }
    .pqrs label { display: block; font-weight: bold; margin-bottom: 5px; margin-top: 15px; }
    .pqrs input, .pqrs select, .pqrs textarea {
        width: 100%; padding: 10px; border: 1px solid #ccc;
        border-radius: 6px; font-size: 15px; font-family: Georgia, serif;
    }
    .pqrs input.is-invalid, .pqrs select.is-invalid, .pqrs textarea.is-invalid {
        border-color: #e53e3e;
    }
    .error-msg { color: #e53e3e; font-size: 13px; margin-top: 4px; }
    .pqrs button {
        margin-top: 20px; padding: 12px 30px;
        background-color: #3b2a1a; color: #f5c842;
        border: none; border-radius: 6px; font-size: 16px; cursor: pointer;
    }
    .pqrs button:hover { background-color: #5a3e28; }

    .alert-success {
        background: #d4edda; color: #155724; border: 1px solid #c3e6cb;
        padding: 14px 20px; border-radius: 8px; margin-bottom: 20px; font-size: 15px;
    }

    .integrantes { text-align: center; margin-top: 40px; padding: 20px; background: #3b2a1a; color: #f5c842; border-radius: 10px; }
</style>

<h2>🏠 Sobre Nosotros</h2>

<div class="fila">
    <img src="https://images.unsplash.com/photo-1611854779393-1b2da9d400fe?w=500" alt="Finca cafetera">
    <p>Somos un café ubicado en Cali, Valle del Cauca. Trabajamos directamente con agricultores del Eje Cafetero, Huila y Nariño para traerte granos de la más alta calidad. Nuestra misión es difundir la cultura cafetera colombiana.</p>
</div>

<div class="pqrs">
    <h4>✉️ Formulario PQRS</h4>

    @if(session('pqrs_success'))
        <div class="alert-success">{{ session('pqrs_success') }}</div>
    @endif

    <form action="{{ route('pqrs.store') }}" method="POST">
        @csrf

        {{-- ✅ name="nombres" coincide con la columna de la BD --}}
        <label for="nombres">Nombre completo</label>
        <input
            type="text"
            id="nombres"
            name="nombres"
            placeholder="Tu nombre"
            value="{{ old('nombres') }}"
            class="{{ $errors->has('nombres') ? 'is-invalid' : '' }}"
        >
        @error('nombres') <p class="error-msg">{{ $message }}</p> @enderror

        <label for="correo">Correo electrónico</label>
        <input
            type="email"
            id="correo"
            name="correo"
            placeholder="correo@ejemplo.com"
            value="{{ old('correo') }}"
            class="{{ $errors->has('correo') ? 'is-invalid' : '' }}"
        >
        @error('correo') <p class="error-msg">{{ $message }}</p> @enderror

        <label for="tipo">Tipo de solicitud</label>
        <select id="tipo" name="tipo" class="{{ $errors->has('tipo') ? 'is-invalid' : '' }}">
            @foreach(['Petición', 'Queja', 'Reclamo', 'Sugerencia'] as $opcion)
                <option value="{{ $opcion }}" {{ old('tipo') === $opcion ? 'selected' : '' }}>
                    {{ $opcion }}
                </option>
            @endforeach
        </select>
        @error('tipo') <p class="error-msg">{{ $message }}</p> @enderror

        <label for="mensaje">Mensaje</label>
        <textarea
            id="mensaje"
            name="mensaje"
            rows="5"
            placeholder="Escribe tu mensaje aquí..."
            class="{{ $errors->has('mensaje') ? 'is-invalid' : '' }}"
        >{{ old('mensaje') }}</textarea>
        @error('mensaje') <p class="error-msg">{{ $message }}</p> @enderror

        <button type="submit">Enviar solicitud</button>
    </form>
</div>

<div class="integrantes">
    <h5>👨‍🎓 Integrantes del grupo</h5>
    <p>Miguel Legarda &nbsp;|&nbsp; Duvan Botina</p>
</div>

@endsection