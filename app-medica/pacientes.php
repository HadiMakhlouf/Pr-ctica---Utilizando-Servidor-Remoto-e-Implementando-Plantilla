<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pacientes | MediCitas - Panel Administrativo</title>
  <link rel="icon" href="img/logo.svg" type="image/svg+xml">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <aside class="sidebar">
    <div class="brand"><img src="img/logo.svg" alt="Logo de MediCitas"> MediCitas</div>
    <a href="index.php">Inicio</a>
    <a href="pacientes.php" class="active">Pacientes</a>
    <a href="doctores.php">Doctores</a>
    <a href="agendar-cita.php">Agendar Cita</a>
    <a href="historial-clinico.php">Historial Clínico</a>
  </aside>

  <main class="main">
    <h1>Pacientes</h1>
    <p class="sub">Pacientes registrados en la clínica.</p>

    <div class="card">
      <table>
        <tr><th>Nombre</th><th>Edad</th><th>Teléfono</th><th>Última visita</th></tr>
        <tr><td>María Rodríguez</td><td>34</td><td>809-555-0101</td><td>05/11/2026</td></tr>
        <tr><td>Carlos Méndez</td><td>52</td><td>809-555-0102</td><td>03/11/2026</td></tr>
        <tr><td>Laura Santana</td><td>8</td><td>829-555-0103</td><td>30/10/2026</td></tr>
        <tr><td>Pedro Almonte</td><td>41</td><td>849-555-0104</td><td>28/10/2026</td></tr>
        <tr><td>Sofía Castillo</td><td>29</td><td>809-555-0105</td><td>25/10/2026</td></tr>
      </table>
    </div>
    <footer>&copy; <?php echo date('Y'); ?> MediCitas &middot; Panel Administrativo</footer>
  </main>
</body>
</html>
