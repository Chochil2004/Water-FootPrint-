<!-- resources/views/pregunta/cuestionario.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>4. Transporte</title>
</head>
<body>
    <h1>Sección 4. Transporte</h1>
    <form action="{{ route('cuestionario.submit4') }}" method="POST">
        @csrf
        <label for="pregunta7"> 7. ¿Qué medio de transporte utilizas con mayor frecuencia?</label><br>
        <input type="radio" name="pregunta7" value="1"> Transporte publico o bicicleta <br>
        <input type="radio" name="pregunta7" value="2"> Automovil compartido <br>
        <input type="radio" name="pregunta7" value="3"> Automovil propio o moto <br><br>

        <button type="submit">Enviar Respuestas</button>
    </form>
</body>
</html>
