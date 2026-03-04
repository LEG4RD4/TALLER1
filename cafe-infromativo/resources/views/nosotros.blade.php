@extends('layouts.app')
@section('title', 'Nosotros')
@section('content')

<h1 class="text-center mb-4">🏠 Sobre Nosotros</h1>

<div class="row align-items-center mb-5">
    <div class="col-md-6">
        <p class="fs-5">Somos un café artesanal fundado en 2020, con la misión de ofrecer el mejor café de origen colombiano. Trabajamos directamente con agricultores del Huila, Nariño y el Eje Cafetero.</p>
        <p class="fs-5">Nuestro espacio está diseñado para que puedas trabajar, estudiar o simplemente disfrutar de una buena taza.</p>
    </div>
    <div class="col-md-6">
        <img src="https://images.unsplash.com/photo-1600093463592-8e36ae95ef56?w=500" class="img-fluid rounded shadow" alt="Equipo">
    </div>
</div>

<hr>

<h3 class="mt-4">✉️ Formulario PQRS</h3>
<p>¿Tienes alguna petición, queja, reclamo o sugerencia? Escríbenos.</p>

<div class="card shadow p-4 mt-3">
    <div class="mb-3">
        <label class="form-label fw-bold">Nombre completo</label>
        <input type="text" class="form-control" placeholder="Tu nombre">
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Correo electrónico</label>
        <input type="email" class="form-control" placeholder="correo@ejemplo.com">
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Tipo de solicitud</label>
        <select class="form-select">
            <option>Petición</option>
            <option>Queja</option>
            <option>Reclamo</option>
            <option>Sugerencia</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label fw-bold">Mensaje</label>
        <textarea class="form-control" rows="4" placeholder="Escribe tu mensaje aquí..."></textarea>
    </div>
    <button class="btn btn-warning fw-bold">Enviar solicitud</button>
</div>

<hr class="mt-5">
<div class="text-center mt-4 text-muted">
    <h5>👨‍🎓 Integrantes del grupo</h5>
    <p>Nombre Completo Estudiante 1 &nbsp;|&nbsp; Nombre Completo Estudiante 2</p>
</div>

@endsection