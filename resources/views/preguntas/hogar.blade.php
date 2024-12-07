<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>6. Uso de agua en el hogar</title>
</head>
<body>
    <div id="contenedorp">
        <h1>Sección 6. Uso de agua en el hogar</h1>
        <div id="pregunta">
            <form action="{{ route('cuestionario.submit6') }}" method="POST">
                @csrf
                <label for="pregunta11">11. ¿Cuánto tiempo te tomas en la ducha?</label><br>
                <input type="radio" name="pregunta11" value="1" required> Menos de 5 minutos <br>
                <input type="radio" name="pregunta11" value="2" required> 5-10 minutos <br>
                <input type="radio" name="pregunta11" value="3" required> Más de 10 minutos <br><br>
                
                <label for="pregunta12">12. ¿Tienes sistemas de ahorro de agua instalados (regaderas ahorradoras, inodoros de bajo flujo)?</label><br>
                <input type="radio" name="pregunta12" value="1" required> Sí <br>
                <input type="radio" name="pregunta12" value="2" required> Parcialmente <br>
                <input type="radio" name="pregunta12" value="3" required> No <br><br>

                <button type="submit" id="startButton">Siguiente</button>
            </form>
        </div>
    </div>
</body>
</html>
