@extends('layouts.app')
@section('title', 'Nosotros')
@section('content')

<h2>Nosotros</h2>
<p>Somos un café ubicado en Pasto, Nariño. Usamos granos de cafe para ofrecer el mejor sabor colombiano.</p>

<img src="https://images.unsplash.com/photo-1611854779393-1b2da9d400fe?w=500" width="500" alt="Finca cafetera">

<hr>

<h4> Formulario PQRS</h4>

<br>
<label>Nombre:</label><br>
<input type="text" placeholder="Tu nombre"><br><br>

<label>Correo:</label><br>
<input type="email" placeholder="correo@ejemplo.com"><br><br>

<label>Tipo de solicitud:</label><br>
<select>
    <option>Petición</option>
    <option>Queja</option>
    <option>Reclamo</option>
    <option>Sugerencia</option>
</select><br><br>

<label>Mensaje:</label><br>
<textarea rows="4" cols="50" placeholder="Escribe tu mensaje..."></textarea><br><br>

<button>Enviar</button>

<hr>
<p><strong> Integrantes:</strong> Miguel Legarda | Duvan Botina</p>

@endsection