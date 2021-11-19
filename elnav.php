<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="inicio.php">CIIE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="inicio.php">Inicio
          <span class="sr-only">(current)</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="emprendedor.php">Emprendedores</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="proyectos.php">Registrar proyecto</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="asig_asesor.php">Asignar asesor</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reportes de Proyectos</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="repo_proyecto.php?status=Proceso">En Proceso</a>
        <a class="dropdown-item" href="repo_proyecto.php?status=Aceptado">Aceptado</a>
        <a class="dropdown-item" href="repo_proyecto.php?status=Finalizado">Finalizado</a>
        </div>
      </li>
      
 
            <li class="nav-item">
        <a class="nav-link" href="exit.php">Salir</a>
      </li>
    </ul>

  </div>
</nav>