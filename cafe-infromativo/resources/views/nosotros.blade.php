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
    .pqrs button {
        margin-top: 20px; padding: 12px 30px;
        background-color: #3b2a1a; color: #f5c842;
        border: none; border-radius: 6px; font-size: 16px; cursor: pointer;
    }
    .pqrs button:hover { background-color: #5a3e28; }

    .integrantes { text-align: center; margin-top: 40px; padding: 20px; background: #3b2a1a; color: #f5c842; border-radius: 10px; }
</style>

<h2>🏠 Sobre Nosotros</h2>

<div class="fila">
    <img src="https://images.unsplash.com/photo-1611854779393-1b2da9d400fe?w=500" alt="Finca cafetera">
    <p>Somos un café ubicado en Cali, Valle del Cauca. Trabajamos directamente con agricultores del Eje Cafetero, Huila y Nariño para traerte granos de la más alta calidad. Nuestra misión es difundir la cultura cafetera colombiana.</p>
</div>

<div class="pqrs">
    <h4>✉️ Formulario PQRS</h4>

    <label>Nombre completo</label>
    <input type="text" placeholder="Tu nombre">

    <label>Correo electrónico</label>
    <input type="email" placeholder="correo@ejemplo.com">

    <label>Tipo de solicitud</label>
    <select>
        <option>Petición</option>
        <option>Queja</option>
        <option>Reclamo</option>
        <option>Sugerencia</option>
    </select>

    <label>Mensaje</label>
    <textarea rows="5" placeholder="Escribe tu mensaje aquí..."></textarea>

    <button>Enviar solicitud</button>
</div>

<div class="integrantes">
    <h5>👨‍🎓 Integrantes del grupo</h5>
    <p>Miguel Legarda &nbsp;|&nbsp; Duvan Botina</p>
</div>

@endsection