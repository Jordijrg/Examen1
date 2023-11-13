<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href='src/CSS/index.css' rel='stylesheet' />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> <!-- Actualizado a la versión 3.6.4 -->
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <!-- Incluye la última versión de Bootstrap 5 y Popper.js -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">

  <title>Excursio</title>
</head>

<body>
  <div id="nav">
    <?php
    include 'head.php';
    ?>
  </div>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Accedir a les inscripcions
  </button>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="passwordForm">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password">
            <button type="button" class="btn btn-primary" onclick="verifyPassword()">Verificar Contraseña</button>
          </div>
          <div id="correct" class="d-none">
            <p>Contrasenya Correcta!</p>
          </div>
          </div>
        </div>
      </div>
    </div>



    <div id="container" class="container d-none">
      <table id="example" class="table table-striped inscripcionesTable " style="width:100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Data Naixament</th>
            <th>Adreça</th>
            <th>Resguard</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($inscripcions as $inscripcio): ?>
            <tr>
              <td>
                <?php echo $inscripcio["Id"]; ?>
              </td>
              <td>
                <?php echo $inscripcio["Nom"]; ?>
              </td>
              <td>
                <?php echo $inscripcio["DataNaixement"]; ?>
              </td>
              <td>
                <?php echo $inscripcio["AdrecaCarrer"]; ?>
              </td>
              <td>
                <?php echo $inscripcio["ResguardPagament"]; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    
    <!-- Actualiza las referencias de Bootstrap y Popper.js antes de cargar Ins.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.min.js"></script>
    <script src="src/JS/Ins.js"></script>
</body>

</html>