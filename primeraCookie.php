<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Establecer la fecha de expiración de las cookies para dentro de 1 año
        $fecha_expiracion = time() + 60 * 60 * 24 * 365; // 1 año a partir de ahora
        $path_valido = '/'; // La cookie estará disponible en todo el sitio
    
        // Crear una cookie de fecha actual
        setcookie('Fecha', date('Y-m-d H:i:s'), $fecha_expiracion, $path_valido);
        // Crear un array de preferencias como cookies individuales
        setcookie('preferencias[idioma]', 'espanol', $fecha_expiracion, $path_valido);
        setcookie('preferencias[color]', 'azul', $fecha_expiracion, $path_valido);
        setcookie('preferencias[tema]', 'oscuro', $fecha_expiracion, $path_valido);
        setcookie('nombre', 'Adrian', $fecha_expiracion, $path_valido);
    ?>
</body>
</html>
