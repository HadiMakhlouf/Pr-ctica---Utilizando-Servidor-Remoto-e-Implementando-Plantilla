<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctores | MediCitas - Panel Administrativo</title>
  <link rel="icon" href="img/logo.svg" type="image/svg+xml">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <aside class="sidebar">
    <div class="brand"><img src="img/logo.svg" alt="Logo de MediCitas"> MediCitas</div>
    <a href="index.php">Inicio</a>
    <a href="pacientes.php">Pacientes</a>
    <a href="doctores.php" class="active">Doctores</a>
    <a href="agendar-cita.php">Agendar Cita</a>
    <a href="historial-clinico.php">Historial Clínico</a>
  </aside>

  <main class="main">
    <h1>Doctores</h1>
    <p class="sub">Equipo médico disponible.</p>

    <div class="card">
      <table>
        <tr><th>Nombre</th><th>Especialidad</th><th>Horario</th><th>Estado</th></tr>
        <tr><td>Dra. Ana Pérez</td><td>Medicina General</td><td>Lun - Vie, 8:00 - 14:00</td><td class="ok">Activo</td></tr>
        <tr><td>Dr. Luis Gómez</td><td>Cardiología</td><td>Lun - Mié, 9:00 - 15:00</td><td class="ok">Activo</td></tr>
        <tr><td>Dra. Rosa Núñez</td><td>Pediatría</td><td>Mar - Sáb, 8:00 - 13:00</td><td class="ok">Activo</td></tr>
        <tr><td>Dr. Jorge Díaz</td><td>Dermatología</td><td>Jue - Vie, 10:00 - 16:00</td><td class="pend">Descanso</td></tr>
      </table>
    </div>
    <footer>&copy; <?php echo date('Y'); ?> MediCitas &middot; Panel Administrativo</footer>
  </main>
</body>
</html>
