@extends('layaut.app')

@section('content')
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
        <a class="navbar-brand" href="{{route('landing.acercade')}}"> <strong>Acerca de</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('landing.contacto')}}">Contacto</a>
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
    <div><br></div>
    <div><br></div>
    <div><br></div>
    <div class="row">

        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h3>¿Quiénes somos?</h3>
            <h5>Somos una empresa familiar con más de 75 años de experiencia, dedicados a la distribución de frutas y hortalizas en España, con el objetivo de ofrecer un producto de primera calidad y de dar cada día el mejor servicio a nuestros clientes.</h5>
            <h5>Durante estos años hemos ido creciendo en servicios, personal, facturación y por supuesto en ilusión, gracias al apoyo de nuestros clientes y al trabajo constante de todos los profesionales que integran nuestra plantilla</h5>
            <h3>Vision</h3>
            <h5>En 5 años ADSIFARMAONLINE. mantendrá su liderazgo en el suministro oportuno y responsable de medicamentos  esta empresa será un referente de confianza para todas las E.P.S. de Bogotá D.C.   Ofreciendo estabilidad en el software que manejan tanto los usuarios y administradores.</h5>
            <h3>¿Quiénes somos?</h3>
            <h5>1. Misión</h5>
            <h5>Nuestra misión es satisfacer las necesidades de todos nuestros clientes y  partner así como también de nuestros  trabajadores, con el objetivo de maximizar la eficiencia y optimizar la</h5>
            <h5>2. Visión</h5>
            <h5>Nuestra visión es conseguir la fidelización de nuestros clientes a través de comercialización de productos de calidad, a partir de la cual afianzar un crecimiento progresivo y sostenido en el mercado nacional y europeo consolidando nuestra posición como empresa de referencia en el sector con una imagen corporativa propia y diferenciada de sus competidores. Frutas Terrados trabaja para conseguir la máxima calidad, un catálogo de productos diversificado y el mejor servicio al precio más competitivo.</h5>
            <h5>3. Valores</h5>
            <h5>La seriedad y el compromiso que nos permiten mantener la confianza de nuestros clientes y proveedores.</h5>
            <h5>Compromiso de servicio de nuestro equipo humano para lograr, con  su esfuerzo constante, la satisfacción del cliente.</h5>
            <h5>Apuesta decidida por la Calidad y mejora continua de nuestras instalaciones y procedimientos, para anticiparnos a las necesidades del mercado y así ser más competitivos</h5>
        </div>
    </div>

@endsection
