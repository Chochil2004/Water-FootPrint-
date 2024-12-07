<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>7. Energía y calefacción</title>
</head>
<body>
    <div id="contenedorp">
        <h1>Sección 7. Uso de energía y calefacción</h1>
        <div id="pregunta">
            <form action="{{ route('cuestionario.submit7') }}" method="POST">
                @csrf
                <label for="pregunta13">13. ¿Qué tipo de energía utilizas principalmente en tu hogar?</label><br>
                <input type="radio" name="pregunta13" value="1" required> Energía renovable <br>
                <input type="radio" name="pregunta13" value="2" required> Gas natural <br>
                <input type="radio" name="pregunta13" value="3" required> Carbón o energía fósil <br><br>

                <label for="pregunta14">14. ¿Tienes calefacción o aire acondicionado central?</label><br>
                <input type="radio" name="pregunta14" value="1" required> No uso calefacción o aire acondicionado <br>
                <input type="radio" name="pregunta14" value="2" required> Uso calefacción o aire acondicionado de manera eficiente <br>
                <input type="radio" name="pregunta14" value="3" required> Uso calefacción o aire acondicionado de manera intensiva <br><br>

                <button type="submit" id="startButton">Siguiente</button>
            </form>
        </div>
    </div>
</body>
</html>
