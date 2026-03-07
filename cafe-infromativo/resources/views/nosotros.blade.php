@extends('layouts.app')
@section('title', 'Inicio')
@section('content')

<style>
    .hero {
        text-align: center;
        padding: 60px 20px;
        background: linear-gradient(135deg, #3b2a1a, #7a5c3a);
        color: #fff;
        border-radius: 12px;
        margin-bottom: 50px;
    }
    .hero h1 { font-size: 48px; color: #f5c842; margin-bottom: 15px; }
    .hero p { font-size: 20px; margin-bottom: 25px; }
    .hero a {
        background-color: #f5c842; color: #3b2a1a;
        padding: 12px 35px; border-radius: 30px;
        text-decoration: none; font-weight: bold; font-size: 16px;
    }
    .hero a:hover { background-color: #e0b230; }

    /* CARRUSEL */
    .carrusel {
        position: relative;
        width: 100%;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        margin-bottom: 50px;
    }
    .carrusel-track {
        display: flex;
        transition: transform 0.6s ease-in-out;
    }
    .carrusel-track img {
        min-width: 100%;
        height: 420px;
        object-fit: cover;
    }
    .carrusel-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0,0,0,0.5);
        color: #fff;
        border: none;
        font-size: 28px;
        padding: 10px 18px;
        cursor: pointer;
        border-radius: 50%;
        z-index: 10;
        transition: background 0.3s;
    }
    .carrusel-btn:hover { background: rgba(0,0,0,0.85); }
    .btn-prev { left: 15px; }
    .btn-next { right: 15px; }
    .carrusel-dots {
        text-align: center;
        margin-top: 12px;
    }
    .carrusel-dots span {
        display: inline-block;
        width: 12px; height: 12px;
        background: #ccc; border-radius: 50%;
        margin: 0 5px; cursor: pointer;
        transition: background 0.3s;
    }
    .carrusel-dots span.activo { background: #3b2a1a; }

    /* SECCIÓN INFO */
    .info-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        margin-bottom: 50px;
    }
    .info-card {
        background: #fff;
        border-radius: 12px;
        padding: 25px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        transition: transform 0.3s;
    }
    .info-card:hover { transform: translateY(-5px); }
    .info-card .icono { font-size: 40px; margin-bottom: 12px; }
    .info-card h4 { font-size: 18px; margin-bottom: 8px; color: #3b2a1a; }
    .info-card p { font-size: 14px; color: #7a5c3a; line-height: 1.6; }

    /* VIDEO */
    .video-seccion {
        text-align: center;
        background: #3b2a1a;
        padding: 40px;
        border-radius: 12px;
        color: #fff;
    }
    .video-seccion h3 { font-size: 26px; color: #f5c842; margin-bottom: 20px; }
    .video-seccion a {
        display: inline-block;
        background-color: #f5c842;
        color: #3b2a1a;
        padding: 14px 40px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: bold;
        font-size: 17px;
    }
    .video-seccion a:hover { background-color: #e0b230; }
</style>

<!-- HERO -->
<div class="hero">
    <h1>☕ Café Colombia</h1>
    <p>El mejor café del mundo, cultivado en los Andes colombianos.</p>
    <a href="{{ route('menu') }}">Ver nuestro Menú</a>
</div>

<!-- CARRUSEL -->
<div class="carrusel">
    <button class="carrusel-btn btn-prev" onclick="moverCarrusel(-1)">&#8592;</button>
    <div class="carrusel-track" id="track">
        <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=900&h=420&fit=crop" alt="Café 1">
        <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=900&h=420&fit=crop" alt="Café 2">
        <img src="https://images.unsplash.com/photo-1611854779393-1b2da9d400fe?w=900&h=420&fit=crop" alt="Café 3">
        <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=900&h=420&fit=crop" alt="Café 4">
        <img src="https://images.unsplash.com/photo-1600093463592-8e36ae95ef56?w=900&h=420&fit=crop" alt="Café 5">
    </div>
    <button class="carrusel-btn btn-next" onclick="moverCarrusel(1)">&#8594;</button>
</div>
<div class="carrusel-dots" id="dots"></div>

<script>
    let actual = 0;
    const total = 5;
    const track = document.getElementById('track');
    const dotsContainer = document.getElementById('dots');

    // Crear dots
    for (let i = 0; i < total; i++) {
        const dot = document.createElement('span');
        if (i === 0) dot.classList.add('activo');
        dot.onclick = () => irA(i);
        dotsContainer.appendChild(dot);
    }

    function actualizarDots() {
        document.querySelectorAll('.carrusel-dots span').forEach((d, i) => {
            d.classList.toggle('activo', i === actual);
        });
    }

    function irA(index) {
        actual = index;
        track.style.transform = `translateX(-${actual * 100}%)`;
        actualizarDots();
    }

    function moverCarrusel(dir) {
        actual = (actual + dir + total) % total;
        irA(actual);
    }

    // Auto-play cada 4 segundos
    setInterval(() => moverCarrusel(1), 4000);
</script>

<!-- CARDS INFO -->
<div class="info-grid">
    <div class="info-card">
        <div class="icono">🌱</div>
        <h4>Origen 100% Colombiano</h4>
        <p>Trabajamos con agricultores del Eje Cafetero, Huila y Nariño.</p>
    </div>
    <div class="info-card">
        <div class="icono">☕</div>
        <h4>Café de Especialidad</h4>
        <p>Granos seleccionados a mano con los más altos estándares de calidad.</p>
    </div>
    <div class="info-card">
        <div class="icono">🏆</div>
        <h4>Reconocido Mundialmente</h4>
        <p>El café colombiano es considerado uno de los mejores del planeta.</p>
    </div>
</div>

<!-- VIDEO -->
<div class="video-seccion">
    <h3>🎬 Conoce el café colombiano</h3>
    <p style="margin-bottom: 20px; color: #ccc;">Un recorrido por las fincas cafeteras de Colombia</p>
    <a href="https://www.youtube.com/watch?v=YqhEVDxZf1o" target="_blank">▶ Ver video en YouTube</a>
</div>

@endsection