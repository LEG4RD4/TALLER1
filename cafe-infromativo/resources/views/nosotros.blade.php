@extends('layouts.app')
@section('title', 'Nosotros')
@section('content')

<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Lato:wght@300;400&display=swap');

h2 { font-size: 32px; margin-bottom: 20px; border-bottom: 3px solid #f5c842; padding-bottom: 10px; }

.fila { display: flex; gap: 30px; align-items: center; margin-bottom: 40px; }
.fila img { width: 420px; height: 260px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.2); }
.fila p { font-size: 17px; line-height: 1.8; }

.pqrs-wrap { font-family: 'Lato', sans-serif; background: #1a0f07; border-radius: 16px; overflow: hidden; max-width: 100%; border: 1px solid #3b2a1a; margin-bottom: 40px; }

.pqrs-banner { position: relative; height: 200px; overflow: hidden; }
.pqrs-banner img { width: 100%; height: 100%; object-fit: cover; filter: brightness(0.45); }
.pqrs-banner-text { position: absolute; inset: 0; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; }
.pqrs-banner-text span { font-size: 32px; }
.pqrs-banner-text h4 { font-family: 'Playfair Display', serif; font-size: 28px; color: #f5c842; margin: 6px 0 4px; letter-spacing: 1px; }
.pqrs-banner-text p { font-size: 12px; color: #c9a96e; letter-spacing: 3px; text-transform: uppercase; margin: 0; }

.pqrs-body { padding: 36px 40px 40px; }
.field-group { margin-bottom: 24px; }
.field-group label { display: block; font-size: 11px; letter-spacing: 2.5px; text-transform: uppercase; color: #a07850; margin-bottom: 8px; }
.field-group input, .field-group textarea {
    width: 100%; background: #0f0804; border: 1px solid #3b2a1a; border-radius: 6px;
    padding: 12px 16px; font-family: 'Lato', sans-serif; font-size: 14px; color: #e8d5b0;
    outline: none; box-sizing: border-box; transition: border-color 0.2s;
}
.field-group input::placeholder, .field-group textarea::placeholder { color: #4a3520; }
.field-group input:focus, .field-group textarea:focus { border-color: #c9971a; box-shadow: 0 0 0 3px rgba(201,151,26,0.12); }
.field-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
.tipo-pills { display: flex; gap: 8px; flex-wrap: wrap; }
.pill {
    padding: 8px 18px; border: 1px solid #3b2a1a; border-radius: 30px;
    font-size: 13px; color: #a07850; cursor: pointer; background: #0f0804;
    transition: all 0.15s; user-select: none;
}
.pill:hover { border-color: #c9971a; color: #e8d5b0; }
.pill.active { background: #c9971a; color: #1a0f07; border-color: #c9971a; }
.divider { height: 1px; background: linear-gradient(to right, transparent, #3b2a1a, transparent); margin: 28px 0; }
.btn-enviar {
    width: 100%; padding: 15px; background: #c9971a; color: #1a0f07;
    border: none; border-radius: 6px; font-family: 'Playfair Display', serif;
    font-size: 15px; letter-spacing: 2px; text-transform: uppercase; cursor: pointer;
    transition: background 0.2s;
}
.btn-enviar:hover { background: #f5c842; }
.error-msg { color: #e07070; font-size: 12px; margin-top: 5px; }
.alert-success {
    background: #1a2e1a; border: 1px solid #2a5a2a; color: #7fc97f;
    padding: 14px 20px; border-radius: 6px; font-size: 14px; margin-bottom: 24px;
}
.acepto-wrap { display: flex; align-items: center; gap: 10px; margin-bottom: 24px; }
.acepto-wrap input { width: auto; }
.acepto-wrap label { font-size: 13px; color: #a07850; text-transform: none; letter-spacing: 0; }

.integrantes { text-align: center; margin-top: 40px; padding: 20px; background: #3b2a1a; color: #f5c842; border-radius: 10px; }
</style>

<h2>🏠 Sobre Nosotros</h2>

<div class="fila">
    <img src="https://images.unsplash.com/photo-1611854779393-1b2da9d400fe?w=500" alt="Finca cafetera">
    <p>Somos un café ubicado en Cali, Valle del Cauca. Trabajamos directamente con agricultores del Eje Cafetero, Huila y Nariño para traerte granos de la más alta calidad. Nuestra misión es difundir la cultura cafetera colombiana.</p>
</div>

<div class="pqrs-wrap">

    <div class="pqrs-banner">
        <img src="https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=1200" alt="Tienda de café">
        <div class="pqrs-banner-text">
            <span>☕</span>
            <h4>Formulario PQRS</h4>
            <p>Café · Cali, Colombia</p>
        </div>
    </div>

    <div class="pqrs-body">

        {{-- Alerta de éxito --}}
        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('pqrs.store') }}" method="POST">
            @csrf

            <div class="field-row">
                <div class="field-group">
                    <label for="nombres">Nombres</label>
                    <input type="text" id="nombres" name="nombres" placeholder="Tu nombre" value="{{ old('nombres') }}">
                    @error('nombres') <p class="error-msg">{{ $message }}</p> @enderror
                </div>
                <div class="field-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" placeholder="Tus apellidos" value="{{ old('apellidos') }}">
                    @error('apellidos') <p class="error-msg">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="field-group">
                <label for="correos">Correo electrónico</label>
                <input type="email" id="correos" name="correos" placeholder="correo@ejemplo.com" value="{{ old('correos') }}">
                @error('correos') <p class="error-msg">{{ $message }}</p> @enderror
            </div>

            <div class="field-group">
                <label>Tipo de solicitud</label>
                <div class="tipo-pills" id="tipo-pills">
                    {{-- Corregimos las opciones para que coincidan con la validación: in:Queja,Petición,Felicitación --}}
                    @foreach(['Queja', 'Petición', 'Felicitación'] as $op)
                        <div class="pill {{ (old('tipo', 'Queja') === $op) ? 'active' : '' }}" data-val="{{ $op }}">
                            {{ $op }}
                        </div>
                    @endforeach
                </div>
                {{-- Este input hidden es el que realmente envía el valor al controlador --}}
                <input type="hidden" id="tipo" name="tipo" value="{{ old('tipo', 'Queja') }}">
                @error('tipo') <p class="error-msg">{{ $message }}</p> @enderror
            </div>

            <div class="divider"></div>

            <div class="field-group">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí...">{{ old('mensaje') }}</textarea>
                @error('mensaje') <p class="error-msg">{{ $message }}</p> @enderror
            </div>

            <div class="acepto-wrap">
                {{-- Importante: name="acepto" para que el controlador lo valide --}}
                <input type="checkbox" id="acepto" name="acepto" value="1" {{ old('acepto') ? 'checked' : '' }}>
                <label for="acepto">Acepto los términos y condiciones</label>
                @error('acepto') <p class="error-msg">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="btn-enviar">Enviar solicitud</button>

        </form>
    </div>
</div>

<div class="integrantes">
    <h5>👨‍🎓 Integrantes del grupo</h5>
    <p>Miguel Legarda &nbsp;|&nbsp; Duvan Botina</p>
</div>

<script>
// Lógica para que las "pills" funcionen y marquen el tipo correcto
document.querySelectorAll('.pill').forEach(pill => {
    pill.addEventListener('click', () => {
        document.querySelectorAll('.pill').forEach(p => p.classList.remove('active'));
        pill.classList.add('active');
        document.getElementById('tipo').value = pill.dataset.val;
    });
});
</script>

@endsection