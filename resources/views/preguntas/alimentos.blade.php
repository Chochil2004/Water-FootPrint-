<!-- resources/views/pregunta/cuestionario.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>2. Consumo de alimentos</title>
</head>
<body>
    <div id="contenedorp">
        <h1>Seccion 2. Consumo de alimentos</h1>
        <div id="pregunta">
            <form action="{{ route('cuestionario.submit2') }}" method="POST" id="form">
                @csrf
                <label for="pregunta3" id="">3. ¿Cuánto consumo de carne tienes semanalmente?</label><br>
                <input type="radio" name="pregunta3" value="1" required> Ninguna <br>
                <input type="radio" name="pregunta3" value="2" required> 1-2 veces por semana <br>
                <input type="radio" name="pregunta3" value="3" required> Más de 3 veces a la semana <br><br>

                
                <label for="pregunta4">4. ¿Qué proporción de tus alimentos son productos procesados?</label><br>
                <input type="radio" name="pregunta4" value="1" required> Pocos o ninguno <br>
                <input type="radio" name="pregunta4" value="2" required> Algunos alimentos procesados <br>
                <input type="radio" name="pregunta4" value="3" required> Muchos alimentos procesados <br><br>

                <button type="submit" id="startButton">Siguiente</button>
            </form>
        </div>
    </div>
</body>
</html>
