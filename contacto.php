<?php
// Procesamiento del formulario de contacto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $mensaje = isset($_POST['mensaje']) ? htmlspecialchars(trim($_POST['mensaje'])) : '';
    
    $errores = [];
    
    // Validación
    if (empty($nombre)) {
        $errores[] = "El nombre es requerido";
    }
    
    if (empty($email)) {
        $errores[] = "El email es requerido";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El email no es válido";
    }
    
    if (empty($mensaje)) {
        $errores[] = "El mensaje es requerido";
    }
    
    if (empty($errores)) {
        // Aquí podrías enviar un email, guardar en base de datos, etc.
        $mensaje_exito = "¡Gracias por tu mensaje, $nombre! Te contactaremos pronto.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Acceso al Agua Potable</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .result-container {
            max-width: 800px;
            margin: 100px auto;
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            text-align: center;
        }
        .success {
            color: #28a745;
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .error {
            color: #dc3545;
            margin-bottom: 1rem;
        }
        .back-link {
            display: inline-block;
            margin-top: 2rem;
            padding: 10px 30px;
            background-color: #0066cc;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .back-link:hover {
            background-color: #0052a3;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php if (isset($mensaje_exito)): ?>
            <div class="success">
                <h2>✓ Mensaje Enviado</h2>
                <p><?php echo $mensaje_exito; ?></p>
            </div>
        <?php elseif (!empty($errores)): ?>
            <h2>Error al enviar el mensaje</h2>
            <?php foreach ($errores as $error): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endforeach; ?>
        <?php else: ?>
            <h2>Gracias por tu interés</h2>
            <p>Tu mensaje ha sido recibido. Te contactaremos pronto.</p>
        <?php endif; ?>
        
        <a href="index.php" class="back-link">Volver a la página principal</a>
    </div>
</body>
</html>

