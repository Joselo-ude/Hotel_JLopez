
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    
    </head>
    <body class="antialiased">  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <li class="nav-item active">
            <a class="navbar-brand" href="{{url('/')}}">Hotel La Rivera</a>
            </li> 
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hotel
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{url('/hotel/historia')}}">Historia</a>
                <a class="dropdown-item" href="{{url('/hotel/mision')}}">Mision Y Vision</a>
                <a class="dropdown-item" href="{{url('/hotel/ubicacion')}}">Ubicación</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Servicios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{url('/servicios/habitaciones')}}">Habitaciones</a>
                <a class="dropdown-item" href="{{url('/servicios/eventos/{id}')}}">Eventos</a>                
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Reservas<span class="sr-only">(current)</span></a>
            </li>   
            <li class="nav-item active">
                <a class="nav-link" href="#">Contactos<span class="sr-only">(current)</span></a>
            </li>       
            </ul>
        </div>
        </nav>
        </body>
</html>
