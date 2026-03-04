@extends('layouts.app')
@section('title', 'Contacto')
@section('content')

<h1 class="text-center mb-4">📞 Contacto</h1>

<div class="row">
    <div class="col-md-6">
        <div class="card shadow p-4">
            <h5>📍 Dirección</h5>
            <p>Calle 15 # 8-42, Barrio Granada, Cali, Valle del Cauca</p>
            <h5>📞 Teléfono</h5>
            <p>+57 300 000 0000</p>
            <h5>📧 Correo</h5>
            <p>cafearoma@ejemplo.com</p>
            <h5>🕐 Horario</h5>
            <p>Lunes a Viernes: 7am - 8pm<br>Sábados: 8am - 6pm</p>
        </div>
    </div>
    <div class="col-md-6">
        <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=500" class="img-fluid rounded shadow" alt="Tienda">
    </div>
</div>

@endsection