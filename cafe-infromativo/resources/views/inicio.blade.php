@extends('layouts.app')
@section('title', 'Inicio')
@section('content')

<div class="text-center py-5" style="background-color: #f8f1e7; border-radius: 12px;">
    <h1 class="display-4 fw-bold">☕ Bienvenidos al Café Aroma</h1>
    <p class="lead mt-3">El mejor café artesanal de la ciudad, hecho con amor y tradición.</p>
    <a href="{{ route('menu') }}" class="btn btn-warning btn-lg mt-3">Ver nuestro Menú</a>
</div>

<div class="row mt-5">
    <div class="col-md-4 text-center">
        <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=400" class="img-fluid rounded shadow" alt="Café">
        <h5 class="mt-2">Café de especialidad</h5>
    </div>
    <div class="col-md-4 text-center">
        <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=400" class="img-fluid rounded shadow" alt="Ambiente">
        <h5 class="mt-2">Ambiente acogedor</h5>
    </div>
    <div class="col-md-4 text-center">
        <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=400" class="img-fluid rounded shadow" alt="Local">
        <h5 class="mt-2">Nuestro local</h5>
    </div>
</div>

<div class="text-center mt-5">
    <h4>📍 Ubicados en el corazón de Cali, Valle del Cauca</h4>
    <div class="ratio ratio-16x9 mt-3">
        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Video del café" allowfullscreen></iframe>
    </div>
</div>

@endsection