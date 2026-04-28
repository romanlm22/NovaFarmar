@extends('layouts.app')

@section('title', 'Tienda')

@section('content')

<div class="container mt-4">

    <div class="row g-4 mb-5">
        <div class="col-12 col-md-6">
            <h5 class="fw-bold text-success mb-3 border-start border-4 border-success ps-2">Sucursales</h5>
            <div class="carousel slide shadow">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1586015555751-63bb77f4322a?q=80&w=800" class="d-block w-100">
                        <div class="info-footer">
                            <h6 class="fw-bold mb-0">Atención 24hs</h6>
                            <small>Av. 3 de Abril - Corrientes</small>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=800" class="d-block w-100">
                        <div class="info-footer">
                            <h6 class="fw-bold mb-0">Recetas Digitales</h6>
                            <small>Aceptamos Obras Sociales</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <h5 class="fw-bold text-primary mb-3 border-start border-4 border-primary ps-2">Perfumería</h5>
            <div class="carousel slide shadow">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1594035910387-fea47794261f?q=80&w=800" class="d-block w-100">
                        <div class="info-footer bg-primary">
                            <h6 class="fw-bold mb-0">Fragancias</h6>
                            <small>Importadas y Nacionales</small>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?q=80&w=800" class="d-block w-100">
                        <div class="info-footer bg-primary">
                            <h6 class="fw-bold mb-0">Cuidado de Piel</h6>
                            <small>Línea Dermocosmética</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4 class="fw-bold mb-4 text-center">Productos en Oferta</h4>

    <div class="row">

        <!-- CARD 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0 product-card text-center p-4">
                <img src="https://cdn-icons-png.flaticon.com/512/2966/2966489.png" class="producto-img mb-3">
                <h5 class="mt-2">Ibuprofeno 600</h5>
                <p class="fw-bold text-success">$2500</p>
                <button class="btn btn-success w-100">
                    Agregar al carrito
                </button>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0 product-card text-center p-4">
                <img src="https://cdn-icons-png.flaticon.com/512/2913/2913465.png" class="producto-img mb-3">
                <h5 class="mt-2">Alcohol en Gel</h5>
                <p class="fw-bold text-success">$1800</p>
                <button class="btn btn-success w-100">
                    Agregar al carrito
                </button>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0 product-card text-center p-4">
                <img src="https://cdn-icons-png.flaticon.com/512/1684/1684375.png" class="producto-img mb-3">
                <h5 class="mt-2">Termómetro</h5>
                <p class="fw-bold text-success">$5200</p>
                <button class="btn btn-success w-100">
                    Agregar al carrito
                </button>
            </div>
        </div>

    </div>

</div>

@endsection