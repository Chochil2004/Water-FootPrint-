<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>10. Viajes y transporte a larga distancia</title>
</head>
<body>
    <div id="contenedorp">
        <h1>Sección 10. Viajes y transporte a larga distancia</h1>
        <div id="pregunta">
            <form action="{{ route('cuestionario.submit10') }}" method="POST">
                @csrf
                <label for="pregunta19">19. ¿Con qué frecuencia viajas en avión?</label><br>
                <input type="radio" name="pregunta19" value="1" required> Menos de una vez por año <br>
                <input type="radio" name="pregunta19" value="2" required> 1-2 veces al año <br>
                <input type="radio" name="pregunta19" value="3" required> Más de 3 veces al año <br><br>

                <label for="pregunta20">20. ¿Qué tipo de transporte utilizas para distancias largas (más de 100 km)?</label><br>
                <input type="radio" name="pregunta20" value="1" required> Transporte público <br>
                <input type="radio" name="pregunta20" value="2" required> Auto compartido <br>
                <input type="radio" name="pregunta20" value="3" required> Auto propio <br><br>


                <button type="submit" id="startButton">Enviar Respuestas</button>
            </form>
        </div>
    </div>
</body>
</html>
