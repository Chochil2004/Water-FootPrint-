<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>9. Consumo de bienes y productos de papel</title>
</head>
<body>
    <div id="contenedorp">
        <h1>Sección 9. Consumo de bienes y productos de papel</h1>
        <div id="pregunta">
            <form action="{{ route('cuestionario.submit9') }}" method="POST">
                @csrf
                <label for="pregunta17">17. ¿Con qué frecuencia compras productos de papel (servilletas, toallas de papel, etc.)?</label><br>
                <input type="radio" name="pregunta17" value="1" required> Menos de 1 vez al mes <br>
                <input type="radio" name="pregunta17" value="2" required> 1 vez al mes <br>
                <input type="radio" name="pregunta17" value="3" required> Más de 2 veces al mes <br><br>

                <label for="pregunta18">18. ¿Reciclas papel y otros materiales en tu hogar?</label><br>
                <input type="radio" name="pregunta18" value="1" required> Siempre <br>
                <input type="radio" name="pregunta18" value="2" required> A veces <br>
                <input type="radio" name="pregunta18" value="3" required> Nunca <br><br>


                <button type="submit" id="startButton">Siguiente</button>
            </form>
        </div>
    </div>    
</body>
</html>
