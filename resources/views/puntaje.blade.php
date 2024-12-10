<!-- layouts/app.blade.php -->
<x-app-layout>
<head> 
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body id="puntuacionbody">
    <div class="container">
        <div id="resultado">
            <h2 id="punth2">Resumen de tu Huella Hídrica</h2>
            <div id="contenido-huella">
                <h1>Tu huella hídrica es de:</h1>
                <p><strong> {{ $puntuacion }} </strong> de 60</p>
                <p class="descripcion">
                    Este valor refleja tu consumo total de agua según tus actividades diarias.
                </p>
            </div>
            <a href="mapa"><button class="submit" id="startButton">Ver más detalles</button>
        </div>
    </div>
</body>
</x-app-layout>

      

