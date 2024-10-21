<!-- resources/views/pregunta/cuestionario.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7. Energía y calefacción</title>
</head>
<body>
    <h1>Sección 7. Uso de energía y calefacción</h1>
    <form action="{{ route('cuestionario.submit') }}" method="POST">
        @csrf
        <label for="pregunta13">13. ¿Qué tipo de energía utilizas principalmente en tu hogar?</label><br>
        <input type="radio" name="pregunta13" value="1"> Energía renovable <br>
        <input type="radio" name="pregunta13" value="2"> Gas natural <br>
        <input type="radio" name="pregunta13" value="3"> Carbón o energía fósil <br><br>

        <label for="pregunta14">14. ¿Tienes calefacción o aire acondicionado central?</label><br>
        <input type="radio" name="pregunta14" value="1"> No uso calefacción o aire acondicionado <br>
        <input type="radio" name="pregunta14" value="0"> Uso calefacción o aire acondicionado de manera eficiente <br>
        <input type="radio" name="pregunta14" value="0"> Uso calefacción o aire acondicionado de manera intensiva <br><br>

        <button type="submit">Enviar Respuestas</button>
    </form>
</body>
</html>
