<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>3. Consumo de productos y bienes</title>
</head>
<body>
    <div id="contenedorp">
        <h1>Sección 3. Consumo de productos y bienes</h1>
        <div id="pregunta">
            <form action="{{ route('cuestionario.submit3') }}" method="POST">
                @csrf
                <label for="pregunta5">5. ¿Con qué frecuencia compras ropa nueva?</label><br>
                <input type="radio" name="pregunta5" value="1" required> Menos de 1 vez al año <br>
                <input type="radio" name="pregunta5" value="2" required> 1-2 veces al año <br>
                <input type="radio" name="pregunta5" value="3" required> Más de 3 veces al año <br><br>

                <label for="pregunta6">6. ¿Con qué frecuencia compras productos electrónicos (teléfonos, computadoras, etc.)?</label><br>
                <input type="radio" name="pregunta6" value="1" required> Rara vez o nunca <br>
                <input type="radio" name="pregunta6" value="2" required> 1 cada 2-3 años <br>
                <input type="radio" name="pregunta6" value="3" required> Mas de 1 vez al año <br><br>

                <button type="submit" id="startButton">Siguiente</button>
            </form>
        </div>
    </div>
</body>
</html>
