@extends('layouts.app')
@section('title', 'Menú')
@section('content')

<h1 class="text-center mb-4">☕ Nuestro Menú</h1>

<div class="row">
    <div class="col-md-6">
        <div class="card mb-3 shadow">
            <div class="card-header bg-warning fw-bold">Bebidas Calientes</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between">Café Americano <span>$5.000</span></li>
                <li class="list-group-item d-flex justify-content-between">Cappuccino <span>$7.000</span></li>
                <li class="list-group-item d-flex justify-content-between">Latte <span>$7.500</span></li>
                <li class="list-group-item d-flex justify-content-between">Té Verde <span>$4.000</span></li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3 shadow">
            <div class="card-header bg-warning fw-bold">Comidas</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between">Croissant de mantequilla <span>$8.000</span></li>
                <li class="list-group-item d-flex justify-content-between">Tostada con mermelada <span>$6.000</span></li>
                <li class="list-group-item d-flex justify-content-between">Muffin de arándanos <span>$5.500</span></li>
                <li class="list-group-item d-flex justify-content-between">Sandwich de jamón <span>$10.000</span></li>
            </ul>
        </div>
    </div>
</div>

@endsection