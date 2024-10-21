<!-- resources/views/pregunta/cuestionario.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9. Consumo de bienes y productos de papel</title>
</head>
<body>
    <h1>Sección 9. Consumo de bienes y productos de papel</h1>
    <form action="{{ route('cuestionario.submit') }}" method="POST">
        @csrf
        <label for="pregunta17">17. ¿Con qué frecuencia compras productos de papel (servilletas, toallas de papel, etc.)?</label><br>
        <input type="radio" name="pregunta17" value="1"> Menos de 1 vez al mes <br>
        <input type="radio" name="pregunta17" value="2"> 1 vez al mes <br>
        <input type="radio" name="pregunta17" value="3"> Más de 2 veces al mes <br><br>

        <label for="pregunta18">18. ¿Reciclas papel y otros materiales en tu hogar?</label><br>
        <input type="radio" name="pregunta18" value="1"> Siempre <br>
        <input type="radio" name="pregunta18" value="2"> A veces <br>
        <input type="radio" name="pregunta18" value="3"> Nunca <br><br>


        <button type="submit">Enviar Respuestas</button>
    </form>
</body>
</html>
