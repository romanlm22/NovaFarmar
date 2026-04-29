@extends('layouts.app')

@section('title', 'Acerca de Nosotros')

@section('content')

<div class="container mt-5">

    <h1 class="text-center mb-5">Nuestro Equipo</h1>

    <div class="row">

        <div class="col-md-6 text-center">
            <div class="card shadow p-4">

                <img src="{{ asset('img/nosotros/20230228_101632.jpg') }}"
                     class="rounded-circle mx-auto mb-3">

                <h4>V.Roman Lopez Machado</h4>
                <p class="text-muted">Estudiante de sistemas</p>

                <p>Estudiante de tercer año de la Licenciatura en Sistemas en la UNNE, con formación sólida en programación y desarrollo de software. Cuenta con conocimientos en análisis de sistemas, resolución de problemas y trabajo en equipo, orientado al aprendizaje continuo y a la aplicación práctica de tecnologías para el desarrollo de soluciones informáticas.</p>

                <a href="https://instagram.com/romanlopm" class="btn btn-primary">Contacto(Instagram)</a>

            </div>
        </div>

        <div class="col-md-6 text-center">
            <div class="card shadow p-4">

                 <img src="{{ asset('img/nosotros/Captura de pantalla (5).png') }}"
                     class="rounded-circle mx-auto mb-3">

                <h4>Francisco Gomez Perkovich</h4>
                <p class="text-muted">Estudiante de sistemas</p>

                <p>Estudiante de tercer año de la Licenciatura en Sistemas en la UNNE, con formación sólida en programación y desarrollo de software. Cuenta con conocimientos en análisis de sistemas, resolución de problemas y trabajo en equipo, orientado al aprendizaje continuo y a la aplicación práctica de tecnologías para el desarrollo de soluciones informáticas.</p>

                <a href="https://instagram.com/franperkovich_" class="btn btn-success">Contacto(Instagram)</a>

            </div>
        </div>

    </div>

</div>

@endsection