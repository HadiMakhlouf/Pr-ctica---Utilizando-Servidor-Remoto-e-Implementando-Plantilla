<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Historial Clínico | MediCitas - Panel Administrativo</title>
  <link rel="icon" href="img/logo.svg" type="image/svg+xml">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <aside class="sidebar">
    <div class="brand"><img src="img/logo.svg" alt="Logo de MediCitas"> MediCitas</div>
    <a href="index.php">Inicio</a>
    <a href="pacientes.php">Pacientes</a>
    <a href="doctores.php">Doctores</a>
    <a href="agendar-cita.php">Agendar Cita</a>
    <a href="historial-clinico.php" class="active">Historial Clínico</a>
  </aside>

  <main class="main">
    <h1>Historial Clínico</h1>
    <p class="sub">Registro de consultas y tratamientos.</p>

    <div class="card">
      <table>
        <tr><th>Fecha</th><th>Paciente</th><th>Doctor</th><th>Diagnóstico</th><th>Tratamiento</th></tr>
        <tr><td>05/11/2026</td><td>María Rodríguez</td><td>Dra. Ana Pérez</td><td>Gripe común</td><td>Reposo e hidratación</td></tr>
        <tr><td>03/11/2026</td><td>Carlos Méndez</td><td>Dr. Luis Gómez</td><td>Hipertensión leve</td><td>Control y dieta baja en sal</td></tr>
        <tr><td>30/10/2026</td><td>Laura Santana</td><td>Dra. Rosa Núñez</td><td>Revisión general</td><td>Vacunas al día</td></tr>
        <tr><td>28/10/2026</td><td>Pedro Almonte</td><td>Dr. Jorge Díaz</td><td>Dermatitis</td><td>Crema tópica</td></tr>
      </table>
    </div>
    <footer>&copy; <?php echo date('Y'); ?> MediCitas &middot; Panel Administrativo</footer>
  </main>
</body>
</html>
