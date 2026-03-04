@extends('layouts.app')
@section('title', 'Inicio')
@section('content')

<style>
    .hero { text-align: center; padding: 50px 20px; background-color: #3b2a1a; color: #fff; border-radius: 10px; margin-bottom: 40px; }
    .hero h1 { font-size: 42px; color: #f5c842; }
    .hero p { font-size: 18px; margin-top: 10px; }

    .galeria { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-bottom: 40px; }
    .galeria div { text-align: center; }
    .galeria img { width: 260px; height: 180px; object-fit: cover; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.2); }
    .galeria p { margin-top: 8px; font-size: 14px; color: #7a5c3a; }

    .video-seccion { text-align: center; }
    .video-seccion h3 { font-size: 22px; margin-bottom: 15px; }
    .video-seccion a {
        display: inline-block;
        background-color: #f5c842;
        color: #3b2a1a;
        padding: 12px 30px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: bold;
        font-size: 16px;
    }
    .video-seccion a:hover { background-color: #e0b230; }
</style>

<div class="hero">
    <h1>☕ Café Colombia</h1>
    <p>El mejor café del mundo, cultivado en los Andes colombianos.</p>
</div>

<div class="galeria">
    <div>
        <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=400" alt="Café">
        <p>Café de especialidad</p>
    </div>
    <div>
        <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=400" alt="Taza">
        <p>Preparado con amor</p>
    </div>
    <div>
        <img src="https://images.unsplash.com/photo-1611854779393-1b2da9d400fe?w=400" alt="Finca">
        <p>Origen colombiano</p>
    </div>
</div>

<div class="video-seccion">
    <h3>🎬 Conoce el café colombiano</h3>
    <a href="https://www.youtube.com/watch?v=YqhEVDxZf1o" target="_blank">▶ Ver video en YouTube</a>
</div>

@endsection