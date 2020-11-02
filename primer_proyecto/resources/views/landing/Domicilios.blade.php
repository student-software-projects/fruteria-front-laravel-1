@extends('layaut.app')

@section('content')
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
        <a class="navbar-brand" href="{{route('landing.Domicilios')}}"> <strong>Domicilios</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('landing.contacto')}}">Contacto</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('landing.acercade')}}">Acerca de</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="{{route('landing.index')}}">Inicio</a>
                </li>
            </ul>
        </div>
    </nav>


@endsection
