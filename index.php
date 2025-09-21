<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Captura de Datos</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <div class="container">
    <h1>Captura de Datos Personales</h1>
    <p>Mi primera encuesta</p>
    <hr>

    <form action="resultados.php" method="POST" novalidate>
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre" required maxlength="50">
      </div>

      <div class="form-group">
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad" placeholder="Ingresa tu edad" required min="1" max="100">
      </div>

      <div class="form-group">
        <label for="ciudad">Ciudad donde vives</label>
        <input type="text" name="ciudad" id="ciudad" placeholder="Ingresa tu ciudad" required maxlength="50">
      </div>

      <div class="form-group">
        <label for="fechanacimiento">Fecha de nacimiento</label>
        <input type="date" name="fechanacimiento" id="fechanacimiento" placeholder="Ingresa fecha de nacimiento" required>
      </div>

      <div class="form-group">
        <label for="pasatiempo">Pasatiempo favorito</label>
        <input type="text" name="pasatiempo" id="pasatiempo" placeholder="Pasatiempo favorito" required maxlength="100">
      </div>
      <button type="submit" class="submit-btn">¡Ingresar Datos!</button>
    </form>
  </div>
</body>
<script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
</html>
