@extends('layouts.app')
@section('title', 'Contacto')
@section('content')

<style>
    h2 { font-size: 32px; margin-bottom: 25px; border-bottom: 3px solid #f5c842; padding-bottom: 10px; }
    .contacto-grid { display: flex; gap: 30px; align-items: flex-start; }
    .info { background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); flex: 1; }
    .info p { font-size: 16px; margin-bottom: 15px; line-height: 1.6; }
    .info span { font-weight: bold; color: #3b2a1a; }
    .contacto-grid img { width: 400px; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.2); }
</style>

<h2>📞 Contacto</h2>

<div class="contacto-grid">
    <div class="info">
        <p>📍 <span>Dirección:</span> Calle 15 # 8-42, Barrio Granada, Cali</p>
        <p>📞 <span>Teléfono:</span> +57 300 000 0000</p>
        <p>📧 <span>Correo:</span> cafecolombia@ejemplo.com</p>
        <p>🕐 <span>Horario:</span> Lunes a Viernes 7am - 8pm<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sábados 8am - 6pm</p>
    </div>
    <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=500" alt="Local café">
</div>

@endsection