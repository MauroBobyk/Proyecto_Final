<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Clínica Odontológica')</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">

    <!-- Estilos CSS comunes -->
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    
    <!-- Estilos específicos para la clínica odontológica -->
    <!-- <link rel="stylesheet" href="{{ asset('css/odontologia.css') }}"> -->
    
    
    <!-- Font Awesome 5.15.1 CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Roboto', sans-serif; 
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: url({{ asset('img/Fondo.svg') }})
          }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        /* Estilos para formularios */
        form {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4285f4; 
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #357ae8; 
        }

        .wrapper .icon{
  position: relative;
  background-color: #ffffff;
  border-radius: 50%;
  margin: 10px;
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 22px;
  display: inline-block;
  align-items: center;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  color: #333;
  text-decoration: none;
}
.wrapper .tooltip {
  position: absolute;
  top: 0;
  line-height: 1.5;
  font-size: 14px;
  background-color: #ffffff;
  color: #ffffff;
  padding: 5px 8px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .tooltip::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  background-color: #ffffff;
  bottom: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon:hover .tooltip {
  top: -45px;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}
.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip {
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}
.wrapper .facebook:hover,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip::before {
  background-color: #3b5999;
  color: #ffffff;
}
.wrapper .twitter:hover,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip::before {
  background-color: #46c1f6;
  color: #ffffff;
}
.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before {
  background-color: #e1306c;
  color: #ffffff;
}
.wrapper .github:hover,
.wrapper .github:hover .tooltip,
.wrapper .github:hover .tooltip::before {
  background-color: #333333;
  color: #ffffff;
}
.wrapper .youtube:hover,
.wrapper .youtube:hover .tooltip,
.wrapper .youtube:hover .tooltip::before {
  background-color: #de463b;
  color: #ffffff;
}
footer{
  margin-top: 35px;
}

.form-group{
font-size:24px;
color:gray;
}



img {
            /* Estilos normales del logo */
            width: 320px; /* Ajusta el tamaño según tus necesidades */
            height: auto;
            transition: transform 0.3s ease; /* Agrega una transición suave al efecto hover */
        }

        img:hover {
            /* Estilos cuando el mouse está sobre el logo */
            transform: scale(1.1); /* Cambia el tamaño al 110% en el efecto hover */
        }

        /* Otros estilos adicionales según sea necesario */
    </style>

</head>


<body>

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 
<!-- LOGO -->
<center>
  <img src="img/logo.png.png" alt="">

    
    <main>
        <!-- Contenido principal de cada vista -->
        @yield('content')
    </main>


  </center>

    <footer>
        <!-- Pie de página con información de contacto, enlaces, etc. -->
        <div class="card text-center">
  <div class="card-header">
    Clínica Odontológica - Dr. Muelitas
  </div>
  <div class="card-body">
    <h5 class="card-title">App Web - Creada por Mauro Bobyk</h5>
    <p class="card-text"> &copy; 2023 Clínica Odontológica. Todos los derechos reservados.</p>
        
    <div class="wrapper"> 
        <a href="#" class="icon facebook">
          <div class="tooltip">Facebook</div>
          <span><i class="fab fa-facebook-f"></i></span>
        </a></a>
        <a href="#" class="icon twitter">
          <div class="tooltip">Twitter</div>
          <span><i class="fab fa-twitter"></i></span>
        </a></a>
        <a href="#" class="icon instagram">
          <div class="tooltip">Instagram</div>
          <span><i class="fab fa-instagram"></i></span>
        </a></a>
        <a href="#" class="icon github">
          <div class="tooltip">Github</div>
          <span><i class="fab fa-github"></i></span>
        </a></a>
        <a href="#" class="icon youtube">
          <div class="tooltip">Youtube</div>
          <span><i class="fab fa-youtube"></i></span>
        </a>
      </div>

  </div>
  <div class="card-footer text-body-secondary">
    Created with Laravel
  </div>
</div>
    </footer>

    <!-- Scripts JS comunes -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->

    <!-- Scripts JS específicos para la clínica odontológica -->
    <!-- <script src="{{ asset('js/odontologia.js') }}"></script> -->

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
