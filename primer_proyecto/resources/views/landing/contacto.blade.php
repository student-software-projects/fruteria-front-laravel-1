@extends('layaut.app')

@section('content')
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
        <a class="navbar-brand" href="{{route('landing.contacto')}}"> <strong>Contacto</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('landing.acercade')}}">Acerca de</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('landing.Domicilios')}}">Domicilios</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="{{route('landing.index')}}">Inicio</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="form-group"><br></div>
    <div class="form-group"><br></div>
    <div class="col-md-1"></div>
    <div class="col-md-4">
    <div class='card card-body'>
            <br>
            Avda Dollar # 8 42 <br>
            Tel: 3088893<br>
            Cel 3000980990<br>
        </div>
        <div class='card card-body'>
            <br>
            Calle Bolivar # 8 42 <br>
            Tel: 3086678<br>
            Cel 3020750956<br>
        </div>
    </div>
    <div class="col-md-1">
    </div>
    <div class="col-md-6">
    <form >
        <div class="form-group"><br></div>
        <div class="form-group"><br></div>
        <div class='form-group'>
            Nombres y apellidos<br>
            <input type='text' class='form-control' placeholder='Obligatorio' autofocus>
        </div>
        <div class='form-group'>
            Email<br>
            <input type='text' class='form-control' placeholder='Obligatorio' autofocus>
        </div>
        <div class='form-group'>
            Telefono<br>
            <input type='text' class='form-control' placeholder='Obligatorio' autofocus>
        </div>
        <div class='form-group'>
            Asunto<br>
            <input type='text' class='form-control' autofocus>
        </div>
        <div class='form-group'>
            Mensaje<br>
            <textarea row="4" class="form-control" placeholder="escribir mensaje"></textarea>
        </div>
            <br>
            <input type='submit' class="form-control btn btn-info"  value='ENVIAR'>
        </div>
    </form>
    </div>

    <br>
@endsection
