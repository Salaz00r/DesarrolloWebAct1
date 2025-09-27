<?php
//Verificar que los datos lleguen por POST
if ($_SERVER['REQUEST_METHOD']!== 'POST'){
    header('Location: index.php');
    exit();
}

//Funcion para limpiar datos de entrada
function limpiarDatos($dato){
    return htmlspecialchars(trim($dato), ENT_QUOTES, 'UTF-8');
}

//Obtener y limpiar los datos del formulario
$nombre = isset($_POST['nombre']) ? limpiarDatos($_POST['nombre']) : '';
$edad = isset($_POST['edad']) ? (int)$_POST['edad'] : 0;
$ciudad = isset($_POST['ciudad']) ? limpiarDatos($_POST['ciudad']) : '';
$fechanacimiento = isset($_POST['fechanacimiento']) ? limpiarDatos($_POST['fechanacimiento']) : '';
$pasatiempo = isset($_POST['pasatiempo']) ? limpiarDatos($_POST['pasatiempo']) : '';

//Formatear la fecha
$fechaFormateada = '';
if($fechanacimiento){
    $fecha = DateTime::createFromFormat('Y-m-d', $fechanacimiento);
    if($fecha){
        $fechaFormateada = $fecha->format('d/m/Y');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de datos!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container">
    <h1>Resultados</h1>
    <h2>¡Datos Ingresados Correctamente!</h2>

    <div class="resultados-container">
    <?php if ($nombre): ?>
        <p><strong>Nombre:</strong><?php echo $nombre; ?></p>
    <?php endif; ?>

    <?php if ($edad > 0): ?>
        <p><strong>Edad:</strong><?php echo $edad; ?>años</p>
    <?php endif; ?>

    <?php if ($ciudad): ?>
        <p><strong>Ciudad:</strong><?php echo $ciudad; ?></p>
    <?php endif; ?>

    <?php if ($fechaFormateada): ?>
        <p><strong>Fecha de nacimiento:</strong><?php echo $fechaFormateada; ?></p>
    <?php endif; ?>
    
    <?php if ($pasatiempo): ?>
        <p><strong>Pasatiempo Favorito: </strong><?php echo $pasatiempo; ?></p>
    <?php endif; ?>
    </div>

    <div id="popUpOverlay"></div>
    <div id="popUpBox">
        <div id="box">
            <i class="fas fa-question-circle fa-5x"></i>
            <h3>¿Volver a ingresar datos?</h3>
            <div class="modal-buttons">
                <button onclick="window.location.href='index.php'" class="btn-yes">Si</button>
                <button onclick="cerrarModal()" class="btn-no">No</button>
            </div>
        </div>
    </div>
    <button onclick="mostrarModal()" class="btn-volver">¡Volver a ingresar!</button>
    <img src="enviar-datos.png" alt="Imagen de datos enviados" class="resultados-img">
</div>
    <script src="app.js"></script>
</body>
</html>