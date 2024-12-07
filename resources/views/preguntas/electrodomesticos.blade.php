<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>5. Uso de electrodomésticos y hábitos de limpieza</title>
</head>
<body>
    <div id="contenedorp">
        <h1>Sección 5. Uso de electrodomésticos y hábitos de limpieza</h1>
        <div id="pregunta">
            <form action="{{ route('cuestionario.submit5') }}" method="POST">
                @csrf
                <label for="pregunta8">8. ¿Con qué frecuencia utilizas la lavadora?</label><br>
                <input type="radio" name="pregunta8" value="1" required> Menos de 1 vez por semana <br>
                <input type="radio" name="pregunta8" value="2" required> 1-2 veces por semana <br>
                <input type="radio" name="pregunta8" value="3" required> Más de 3 veces por semana <br><br>

                <label for="pregunta9">9. ¿Con qué frecuencia usas el lavavajillas?</label><br>
                <input type="radio" name="pregunta9" value="1" required> No uso lavavajillas <br>
                <input type="radio" name="pregunta9" value="2" required> 1-2 veces por semana <br>
                <input type="radio" name="pregunta9" value="3" required> Más de 3 veces a la semana <br><br>

                <label for="pregunta10">10. ¿Cómo lavas tu auto?</label><br>
                <input type="radio" name="pregunta10" value="1" required> No lavo el auto o lo llevo a una estación con reciclaje de agua <br>
                <input type="radio" name="pregunta10" value="2" required> Lo lavo a mano usando baldes <br>
                <input type="radio" name="pregunta10" value="3" required> Lo lavo con manguera <br><br>

                <button type="submit" id="startButton">Siguiente</button>
            </form>
        </div>
    </div>
</body>
</html>
