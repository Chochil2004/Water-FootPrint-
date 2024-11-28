<!-- layouts/app.blade.php -->
<x-app-layout>
    <head>
        <link rel="stylesheet" href="css/huella-hidrica.css">
    </head>

    <div class="container">
        <!-- <nav class="navbar">
            <label for="" class="brand">
                <a href="/"><img src="img/logo1.png" alt=""></a>
            </label>
            <a href="marcador"><button class="nav-item">MARCADORES</button></a>
            <a href="creditos"><button class="nav-item">CREDITOS</button></a>
            <label for="" class="brand">
                <a href="{{ route('register') }}"><button class="user"><img src="img/user.png" alt=""></button></a> 
            </label>
        </nav> -->
        <div class="content1">
            <h1>Resumen de tu Huella Hidrica</h1>
            <div class="contenido-huella">
                <h2>Tu huella hídrica es de:</h2>
                <p>Tu puntuación total es: {{ $puntuacion }} de 60</p>
                <p class="descripcion">
                    Este valor refleja tu consumo total de agua según tus actividades diarias.
                </p>
            </div>
            <a href="mapa"><button class="submit" id="startButton">Ver más detalles</button>
        </div>
    </div>
</x-app-layout>

      

