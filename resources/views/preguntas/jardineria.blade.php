<!-- resources/views/pregunta/cuestionario.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>8. Jardinería y cuidado de areas verdes</title>
</head>
<body>
    <h1>Sección 8. Jardinería y cuidado de areas verdes</h1>
    <form action="{{ route('cuestionario.submit8') }}" method="POST">
        @csrf
        <!-- Pregunta 1 -->
        <label for="pregunta15">15. ¿Cómo mantienes tu jardín o áreas verdes?</label><br>
        <input type="radio" name="pregunta15" value="1"> No tengo jardín o uso plantas autóctonas y riego mínimo <br>
        <input type="radio" name="pregunta15" value="2"> Uso sistema de riego eficiente <br>
        <input type="radio" name="pregunta15" value="3"> Uso manguera o riego manual frecuente <br><br>

        <!-- Pregunta 2 -->
        <label for="pregunta16">16. ¿Con qué frecuencia riegas el césped o jardín?</label><br>
        <input type="radio" name="pregunta16" value="1"> Nunca o cuando llueve <br>
        <input type="radio" name="pregunta16" value="2"> 1-2 veces por semana <br>
        <input type="radio" name="pregunta16" value="3"> Diariamente <br><br>

        <button type="submit" id="startButton">Siguiente</button>
    </form>
</body>
</html>
