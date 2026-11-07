<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agendar Cita | MediCitas - Panel Administrativo</title>
  <link rel="icon" href="img/logo.svg" type="image/svg+xml">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <aside class="sidebar">
    <div class="brand"><img src="img/logo.svg" alt="Logo de MediCitas"> MediCitas</div>
    <a href="index.php">Inicio</a>
    <a href="pacientes.php">Pacientes</a>
    <a href="doctores.php">Doctores</a>
    <a href="agendar-cita.php" class="active">Agendar Cita</a>
    <a href="historial-clinico.php">Historial Clínico</a>
  </aside>

  <main class="main">
    <h1>Agendar Cita</h1>
    <p class="sub">Reserva una cita con el doctor que necesites.</p>

    <div class="card">
      <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <p class="ok">Cita agendada para <?php echo htmlspecialchars(trim($_POST['paciente'] ?? '')); ?> con <?php echo htmlspecialchars($_POST['doctor'] ?? ''); ?> el <?php echo htmlspecialchars($_POST['fecha'] ?? ''); ?> a las <?php echo htmlspecialchars($_POST['hora'] ?? ''); ?>.</p>
      <?php endif; ?>
      <form action="agendar-cita.php" method="post">
        <label for="paciente">Paciente</label>
        <input type="text" id="paciente" name="paciente" required>

        <label for="doctor">Doctor</label>
        <select id="doctor" name="doctor" required>
          <option>Dra. Ana Pérez - Medicina General</option>
          <option>Dr. Luis Gómez - Cardiología</option>
          <option>Dra. Rosa Núñez - Pediatría</option>
          <option>Dr. Jorge Díaz - Dermatología</option>
        </select>

        <label for="fecha">Fecha</label>
        <input type="date" id="fecha" name="fecha" required>

        <label for="hora">Hora</label>
        <input type="time" id="hora" name="hora" required>

        <label for="motivo">Motivo de la consulta</label>
        <textarea id="motivo" name="motivo" rows="3"></textarea>

        <button type="submit">Agendar</button>
      </form>
    </div>
    <footer>&copy; <?php echo date('Y'); ?> MediCitas &middot; Panel Administrativo</footer>
  </main>
</body>
</html>
