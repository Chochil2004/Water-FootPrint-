<!-- resources/views/pregunta/cuestionario.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6. Uso de agua en el hogar</title>
</head>
<body>
    <h1>Sección 6. Uso de agua en el hogar</h1>
    <form action="{{ route('cuestionario.submit6') }}" method="POST">
        @csrf
        <label for="pregunta11">11. ¿Cuánto tiempo te tomas en la ducha?</label><br>
        <input type="radio" name="pregunta11" value="1"> Menos de 5 minutos <br>
        <input type="radio" name="pregunta11" value="2"> 5-10 minutos <br>
        <input type="radio" name="pregunta11" value="3"> Más de 10 minutos <br><br>
        
        <label for="pregunta12">12. ¿Tienes sistemas de ahorro de agua instalados (regaderas ahorradoras, inodoros de bajo flujo)?</label><br>
        <input type="radio" name="pregunta12" value="1"> Sí <br>
        <input type="radio" name="pregunta12" value="2"> Parcialmente <br>
        <input type="radio" name="pregunta12" value="3"> No <br><br>

        <button type="submit">Enviar Respuestas</button>
    </form>
</body>
</html>
