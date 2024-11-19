<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula tu Huella Hídrica</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <label for="" class="brand">
                <a href="home.html"><img src="img/logo1.png" alt=""></a>
            </label>
            <a href="marcador"><button class="nav-item">MARCADORES</button></a>
            <a href="creditos.html"><button class="nav-item">CREDITOS</button></a>
            <label for="" class="brand">
                 <a href="{{ route('register') }}"><button class="user"><img src="img/user.png" alt=""></button></a> 
            </label>
        </nav>
        <div class="content ">
            <h1>prueba</h1>
            <h1>CALCULA TU HUELLA HIDRICA</h1>
            <div>
                <a href="http://127.0.0.1:8000/usodirecto"> <button id="startButton">INICIO</button></a>
            </div>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
