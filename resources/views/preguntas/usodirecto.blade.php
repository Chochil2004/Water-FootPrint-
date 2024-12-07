<!-- resources/views/pregunta/cuestionario.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>1. Consumo directo de agua</title>
</head>
<body>
    <div id="contenedorp">
        <h1>Sección 1. Consumo directo de agua</h1>
        <div id="pregunta">
            <form action="{{ route('cuestionario.submit1') }}" method="POST">
                @csrf
                <label for="pregunta1">1. ¿Cuántos litros de agua consumes diariamente para beber?</label><br>
                <input type="radio" name="pregunta1" value="1" required> Menos de 2 litros <br>
                <input type="radio" name="pregunta1" value="2" required> 2-3 litros <br>
                <input type="radio" name="pregunta1" value="3" required> Más de 3 litros <br><br>

                <label for="pregunta2">2. ¿Con qué frecuencia te duchas o bañas?</label><br>
                <input type="radio" name="pregunta2" value="1" required> Menos de 3 veces a la semana <br>
                <input type="radio" name="pregunta2" value="2" required> 1 vez cada dos días <br>
                <input type="radio" name="pregunta2" value="3" required> 1 vez al día <br><br>

                <button type="submit" id="startButton">Siguiente</button>
            </form>
        </div>
    </div>
</body>
</html>
