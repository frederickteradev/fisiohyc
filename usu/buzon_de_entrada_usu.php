<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="../css/mensajes.css" />
    <title>Document</title>
</head>
<body>



<div class="main-container">
  <div class="navbar-col">
    <?php include 'navbar_usu.php'; ?>
  </div>

  <div class="content-wrapper">
    <h2 class="mb-4 text-lila"><i class="bi bi-envelope-fill me-2"></i>Buzón de Entrada</h2>

    <?php
    include '../conexion/conexion_be.php';
    $result = $conexion->query("SELECT * FROM mensajes ORDER BY fecha_enviado DESC");

    while ($fila = $result->fetch_assoc()) {
      $mensaje_corto = strlen($fila['mensaje']) > 120 ? substr($fila['mensaje'], 0, 120) . '...' : $fila['mensaje'];

      echo "
      <div class='card card-custom p-3'>
        <div class='d-flex justify-content-between align-items-center mb-2'>
          <h5 class='mb-0 text-lila'><i class='bi bi-person-circle me-2'></i>{$fila['nombre_completo']}</h5>
          <button class='btn btn-outline-danger btn float-end' data-bs-toggle='modal' data-bs-target='#eliminar{$fila['id_mensaje']}'>
                      <i class='bi bi-trash'></i>
          </button>
        </div>
        <span class='text-muted'>Entregado: {$fila['fecha_envio']}</span>
        <p class='mb-1'><strong>Teléfono:</strong> {$fila['telefono']}</p>
        <p class='mb-2'><strong>Mensaje:</strong> $mensaje_corto</p>
        <button class='btn btn-sm btn-outline-primary' data-bs-toggle='modal' data-bs-target='#verMensaje{$fila['id_mensaje']}'>
          <i class='bi bi-eye'></i> Ver completo
        </button>
        
      </div>

      <!-- Modal -->
      <div class='modal fade' id='verMensaje{$fila['id_mensaje']}' tabindex='-1' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h5 class='modal-title'><i class='bi bi-envelope'></i> Mensaje de {$fila['nombre_completo']}</h5>
              <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
            </div>
            <div class='modal-body'>
              <p><strong>Teléfono:</strong> {$fila['telefono']}</p>
              <p><strong>Fecha:</strong> {$fila['fecha_envio']}</p>
              <hr/>
              <p>{$fila['mensaje']}</p>
            </div>
            <div class='modal-footer'>
              <button
            type='button'
            class='btn btn-secondary'
            data-bs-dismiss='modal'
          >
            Cerrar
          </button>
            </div>
          </div>
        </div>
      </div>
      
      
      <div class='modal fade' id='eliminar{$fila['id_mensaje']}'>
       <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title'>Eliminar Mensaje</h5>
        <button
          type='button'
          class='btn-close'
          data-bs-dismiss='modal'
        ></button>
      </div>
      <div class='modal-body'>
        <h5 class='text-lila text-center'>
          ¿Esta seguro que deseas borrar el mensaje?
        </h5>
        <div class='row'>
          <div class='col-12'>
            <a hidden>{$fila['id_mensaje']}</a>
            <h5 class='text-center text-dark'>
            {$fila['nombre_completo']}
            </h5>
          </div>
        </div>
      </div>
      <div class='modal-footer'>
      <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>
          Cerrar
        </button>

        <a
          href='eliminar_mensaje_bd.php?id_mensaje={$fila['id_mensaje']}'
        >
          <button class='btn btn-danger' type='submit' name='eliminar'>
            <i class='bi bi-trash'></i>
            Eliminar
          </button>
        </a>
      </div>
    </div>
  </div>
    </div>

      
      
      
      ";


      
    }
    ?>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>