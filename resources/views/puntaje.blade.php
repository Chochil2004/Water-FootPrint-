<!-- layouts/app.blade.php -->
<head>
    <link rel="stylesheet" href="css/huella-hidrica.css">
</head>

<div class="container">
    <nav class="navbar">
        <label for="" class="brand">
            <a href="home.html"><img src="img/logo1.png" alt=""></a>
        </label>
        <a href="marcadores.html"><button class="nav-item">MARCADORES</button></a>
        <a href="creditos.html"><button class="nav-item">CREDITOS</button></a>
        <label for="" class="brand">
             <a href="{{ route('register') }}"><button class="user"><img src="img/user.png" alt=""></button></a> 
        </label>
    </nav>
    <div class="content1">
        <h1>Resumen de tu</h1>
        <h1>Huella Hidrica</h1>
        <div class="contenido-huella">
            <p>Hola, <strong>{{ auth()->user()->name }}</strong></p>
            <p>Tu huella hídrica es de:</p>
            <div class="puntaje">
            </div>
            <p class="descripcion">
                Este valor refleja tu consumo total de agua según tus actividades diarias.
            </p>
        </div>
        <button class="button">Ver más detalles</button>
    </div>
</div>


      

