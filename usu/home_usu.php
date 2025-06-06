<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Inicio - FisioH&C</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="../assets/img/logo.png"
    />
    <link rel="stylesheet" href="../css/personalizado.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body>
    <?php
    include '../conexion/conexion_be.php';
    ?>

    <div class="d-flex flex-wrap min-vh-100">
      <div class="navbar-col">
        <?php include 'navbar_usu.php'; ?>
      </div>

      <div class="content-wrapper">
        <h1 class="mb-4 text-lila">
          <i class="bi bi-speedometer2 me-2"></i>Inicio
        </h1>

        <div class="row">
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card text-white bg-success h-100">
              <div
                class="card-body d-flex justify-content-between align-items-center"
              >
                <div>
                  <p class="card-text fs-2"></p>
                  <h5 class="text-white-75 small">Historias Clínicas</h5>
                </div>
                <i class="bi bi-tags-fill fs-1"></i>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card text-white bg-primary h-100">
              <div
                class="card-body d-flex justify-content-between align-items-center"
              >
                <div>
                  <p class="card-text fs-2"></p>
                  <h5 class="text-white-75 small">Nuevos Mensajes</h5>
                </div>
                <i class="bi bi-envelope-fill fs-1"></i>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Productos por Categoría</h5>
                <canvas id="graficoCategorias" height="100"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
