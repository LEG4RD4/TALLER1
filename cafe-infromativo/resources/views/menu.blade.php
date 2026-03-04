@extends('layouts.app')
@section('title', 'Menú')
@section('content')

<style>
    h2 { font-size: 32px; margin-bottom: 25px; border-bottom: 3px solid #f5c842; padding-bottom: 10px; }
    .menu-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .card-menu { background: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); }
    .card-menu h4 { color: #f5c842; background-color: #3b2a1a; padding: 10px; border-radius: 6px; margin-bottom: 15px; }
    .card-menu ul { list-style: none; }
    .card-menu li { padding: 8px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; }
    .card-menu li:last-child { border-bottom: none; }
    .img-menu { width: 100%; height: 200px; object-fit: cover; border-radius: 8px; margin-top: 30px; }
</style>

<h2>☕ Nuestro Menú</h2>

<div class="menu-grid">
    <div class="card-menu">
        <h4>Bebidas Calientes</h4>
        <ul>
            <li><span>Tinto</span><span>$2.000</span></li>
            <li><span>Café Americano</span><span>$5.000</span></li>
            <li><span>Cappuccino</span><span>$7.000</span></li>
            <li><span>Latte</span><span>$7.500</span></li>
        </ul>
    </div>
    <div class="card-menu">
        <h4>Comidas</h4>
        <ul>
            <li><span>Croissant</span><span>$8.000</span></li>
            <li><span>Tostada con mermelada</span><span>$5.000</span></li>
            <li><span>Muffin</span><span>$5.500</span></li>
            <li><span>Sandwich de jamón</span><span>$10.000</span></li>
        </ul>
    </div>
</div>

<img class="img-menu" src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=900" alt="Bebidas café">

@endsection