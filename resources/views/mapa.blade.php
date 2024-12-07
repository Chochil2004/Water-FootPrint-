<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impacto de la Huella Hídrica</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body id="mapabody">
    <div class="container mt-5">
        <h1 class="text-center" id="bodyh1">Impacto de la Huella Hídrica</h1>
        <p id="pmapa">Tu nivel de huella hídrica es: <strong>{{ ucfirst($nivel) }}</strong></p>
        <div class="text-center">
            @if ($nivel === 'baja')
                <img src="img/mapas/mapa_baja.jpg" alt="Mapa Baja Huella Hídrica" class="img-fluid" id="mapa">
                <p id="piamapa">Imagen generada con IA. Elaborada por Dall-E</p>
                <p id="pmapa">Tu huella hídrica es baja. ¡Buen trabajo!</p>
            @elseif ($nivel === 'moderada')
                <img src="/img/mapas/mapa_moderada.jpg" alt="Mapa Moderada Huella Hídrica" class="img-fluid" id="mapa">
                <p id="piamapa">Imagen generada con IA. Elaborada por Dall-E</p>
                <p>Tu huella hídrica es moderada. Considera reducir tu consumo.</p>
            @elseif ($nivel === 'alta')
                <img src="/img/mapas/mapa_alta.jpg" alt="Mapa Moderada Huella Hídrica" class="img-fluid" id="mapa">
                <p id="piamapa">Imagen generada con IA. Elaborada por Dall-E</p>
                <p>Tu huella hídrica es alta. Considera reducir tu consumo.</p>
            @else
                <img src="/img/mapas/mapa_muyalta.jpg" alt="Mapa Alta Huella Hídrica" class="img-fluid" id="mapa">
                <p id="piamapa">Imagen generada con IA. Elaborada por Dall-E</p>
                <p id="pmapa">Tu huella hídrica es muy alta. ¡Es urgente tomar medidas!</p>
            @endif
        </div>
        <a href="puntaje"><button class="submit" id="startButton">Volver</button>
    </div>
</body>
</html>
