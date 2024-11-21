<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impacto de la Huella Hídrica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Impacto de la Huella Hídrica</h1>
        <div class="text-center">
            @if ($nivel === 'baja')
                <img src="/storage/mapas/mapa_baja.png" alt="Mapa Baja Huella Hídrica" class="img-fluid">
                <p>Tu huella hídrica es baja. ¡Buen trabajo!</p>
            @elseif ($nivel === 'moderada')
                <img src="/storage/mapas/mapa_moderada.png" alt="Mapa Moderada Huella Hídrica" class="img-fluid">
                <p>Tu huella hídrica es moderada. Considera reducir tu consumo.</p>
            @elseif ($nivel === 'alta')
                <img src="/storage/mapas/mapa_moderada.png" alt="Mapa Moderada Huella Hídrica" class="img-fluid">
                <p>Tu huella hídrica es alta. Considera reducir tu consumo.</p>
            @else
                <img src="/storage/mapas/mapa_alta.png" alt="Mapa Alta Huella Hídrica" class="img-fluid">
                <p>Tu huella hídrica es muy alta. ¡Es urgente tomar medidas!</p>
            @endif
        </div>
    </div>
</body>
</html>