<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MediCitas - Panel Administrativo</title>
  <link rel="icon" href="img/logo.svg" type="image/svg+xml">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <aside class="sidebar">
    <div class="brand"><img src="img/logo.svg" alt="Logo de MediCitas"> MediCitas</div>
    <a href="index.php" class="active">Inicio</a>
    <a href="pacientes.php">Pacientes</a>
    <a href="doctores.php">Doctores</a>
    <a href="agendar-cita.php">Agendar Cita</a>
    <a href="historial-clinico.php">Historial Clínico</a>
  </aside>

  <main class="main">
    <h1>Panel Administrativo</h1>
    <p class="sub">Hoy es <?php echo date('d/m/Y'); ?>. Bienvenido a MediCitas, tu panel está listo.</p>

    <div class="cards">
      <div class="card"><small>Citas de hoy</small><strong>12</strong></div>
      <div class="card"><small>Pacientes</small><strong>134</strong></div>
      <div class="card"><small>Doctores activos</small><strong>8</strong></div>
      <div class="card"><small>Historiales clínicos</small><strong>97</strong></div>
    </div>

    <div class="card">
      <h2>Próximas citas</h2>
      <table>
        <tr><th>Hora</th><th>Paciente</th><th>Doctor</th><th>Estado</th></tr>
        <tr><td>08:30</td><td>María Rodríguez</td><td>Dra. Ana Pérez</td><td class="ok">Confirmada</td></tr>
        <tr><td>09:15</td><td>Carlos Méndez</td><td>Dr. Luis Gómez</td><td class="ok">Confirmada</td></tr>
        <tr><td>10:00</td><td>Laura Santana</td><td>Dra. Rosa Núñez</td><td class="pend">Pendiente</td></tr>
        <tr><td>11:30</td><td>Pedro Almonte</td><td>Dr. Jorge Díaz</td><td class="pend">Pendiente</td></tr>
      </table>
    </div>
    <footer>&copy; <?php echo date('Y'); ?> MediCitas &middot; Panel Administrativo</footer>
  </main>
</body>
</html>
