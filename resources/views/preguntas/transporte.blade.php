<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>4. Transporte</title>
</head>
<body>
    <div id="contenedorp">
        <h1>Sección 4. Transporte</h1>
        <div id="pregunta">
            <form action="{{ route('cuestionario.submit4') }}" method="POST">
                @csrf
                <label for="pregunta7"> 7. ¿Qué medio de transporte utilizas con mayor frecuencia?</label><br>
                <input type="radio" name="pregunta7" value="1" required> Transporte público o bicicleta <br>
                <input type="radio" name="pregunta7" value="2" required> Automóvil compartido <br>
                <input type="radio" name="pregunta7" value="3" required> Automóvil propio o moto <br><br>

                <button type="submit" id="startButton">Siguiente</button>
            </form>
        </div>
    </div>
</body>
</html>
