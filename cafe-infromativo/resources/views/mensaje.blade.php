@extends('layouts.app')
@section('title', 'Mensaje')
@section('content')

<style>
    .mensaje-box {
        background: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        text-align: center;
        margin-top: 40px;
    }
    .mensaje-box h2 {
        font-size: 32px;
        color: #3b2a1a;
        border-bottom: 3px solid #f5c842;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }
    .mensaje-box p {
        font-size: 18px;
        line-height: 1.8;
        color: #555;
    }
</style>

<div class="mensaje-box">
    <h2>📩 Mensaje</h2>
    <p>Escribe aquí el contenido que quieres mostrar.</p>
</div>

@endsection