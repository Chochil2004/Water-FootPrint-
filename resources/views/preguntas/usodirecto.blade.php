<!-- resources/views/pregunta/cuestionario.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. Consumo directo de agua</title>
</head>
<body>
    <h1>Sección 1. Consumo directo de agua</h1>
    <form action="{{ route('cuestionario.submit') }}" method="POST">
        @csrf
        <label for="pregunta1">1. ¿Cuántos litros de agua consumes diariamente para beber?</label><br>
        <input type="radio" name="pregunta1" value="1"> Menos de 2 litros <br>
        <input type="radio" name="pregunta1" value="2"> 2-3 litros <br>
        <input type="radio" name="pregunta1" value="3"> Más de 3 litros <br><br>

        <label for="pregunta2">2. ¿Con qué frecuencia te duchas o bañas?</label><br>
        <input type="radio" name="pregunta2" value="1"> 1 vez al día <br>
        <input type="radio" name="pregunta2" value="0"> 1 vez cada dos días <br>
        <input type="radio" name="pregunta2" value="0"> Menos de 3 veces a la semana <br><br>

        <label for="pregunta3">3. ¿Cuánto consumo de carne tienes semanalmente?</label><br>
        <input type="radio" name="pregunta3" value="1"> Ninguna <br>
        <input type="radio" name="pregunta3" value="0"> 1-2 veces a la semana <br>
        <input type="radio" name="pregunta3" value="0"> Más de 3 veces a la semana <br><br>

        <label for="pregunta4">4. ¿Qué proporción de tus alimentos son productos procesados?</label><br>
        <input type="radio" name="pregunta4" value="1"> Pocos o ninguno <br>
        <input type="radio" name="pregunta4" value="0"> Algunos productos procesados <br>
        <input type="radio" name="pregunta4" value="0"> Muchos productos procesados <br><br>

        <label for="pregunta5">5. ¿Con qué frecuencia compras ropa nueva?</label><br>
        <input type="radio" name="pregunta5" value="1"> Menos de 1 vez al año <br>
        <input type="radio" name="pregunta5" value="0"> 1-2 veces al año <br>
        <input type="radio" name="pregunta5" value="0"> Más de 3 veces al año <br><br>

        <button type="submit">Enviar Respuestas</button>
    </form>
</body>
</html>
