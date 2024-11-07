<!-- resources/views/pregunta/cuestionario.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. Consumo de alimentos</title>
</head>
<body>
    <h1>Seccion 2. Consumo de alimentos</h1>
    <form action="{{ route('cuestionario.submit2') }}" method="POST">
        @csrf
        
        <label for="pregunta3">3. ¿Cuánto consumo de carne tienes semanalmente?</label><br>
        <input type="radio" name="pregunta3" value="1"> Ninguna <br>
        <input type="radio" name="pregunta3" value="2"> 1-2 veces por semana <br>
        <input type="radio" name="pregunta3" value="3"> Más de 3 veces a la semana <br><br>

        
        <label for="pregunta4">4. ¿Qué proporción de tus alimentos son productos procesados?</label><br>
        <input type="radio" name="pregunta4" value="1"> Pocos o ninguno <br>
        <input type="radio" name="pregunta4" value="2"> Algunos alimetos procesados <br>
        <input type="radio" name="pregunta4" value="3"> Muchos productos procesados <br><br>

        <button type="submit">Enviar Respuestas</button>
    </form>
</body>
</html>
