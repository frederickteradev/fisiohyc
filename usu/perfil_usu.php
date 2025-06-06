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
    <link rel="stylesheet" href="../css/dashboard.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>
</head>
<body>
    
<div class="d-flex flex-wrap min-vh-100">
  <div class="navbar-col">
    <?php include 'navbar_usu.php';?>
  </div>

  <div class="flex-grow-1 p-4">
    <h2 class="text-lila mb-4"><i class="bi bi-person-circle me-2"></i>Perfil del Administrador</h2>

    <div class="card card-profile p-4">
      <div class="row">
        <div class="col-md-8 mb-3">
          <p><span class="profile-label">Nombres:</span> <span class="profile-value"><?php// echo $_SESSION['nombres_adm'];?></span></p>
          <p><span class="profile-label">Apellidos:</span> <span class="profile-value"><?php// echo $_SESSION['apellidos_adm'];?></span></p>
          <p><span class="profile-label">Cédula:</span> <span class="profile-value"><?php// echo $_SESSION['usuario_adm'];?></span></p>
          <p><span class="profile-label">Fecha de Nacimiento:</span> <span class="profile-value"><?php// echo $_SESSION['fecha_nacimiento_adm'];?></span></p>
           <p><span class="profile-label">Numero de Teléfono:</span> <span class="profile-value"><?php// echo $_SESSION['telefono_adm'];?></span></p>
          <p><span class="profile-label">Correo Electrónico:</span> <span class="profile-value"><?php// echo $_SESSION['correo_adm'];?></span></p>
        </div>

        <div class="col-md-4 d-grid gap-2">
          <button class="btn btn-outline-primary btn-custom" data-bs-toggle="modal" data-bs-target="#editarPerfilModal">
            <i class="bi bi-pencil-square me-1"></i> Editar Perfil
          </button>
          <button class="btn btn-outline-secondary btn-custom" data-bs-toggle="modal" data-bs-target="#cambiarClaveModal">
            <i class="bi bi-key me-1"></i> Cambiar Contraseña
          </button>
          <button class="btn btn-outline-success btn-custom" data-bs-toggle="modal" data-bs-target="#nuevoAdminModal">
            <i class="bi bi-person-plus me-1"></i> Agregar Nuevo Administrador
          </button>
        </div>
      </div>
    </div>



    <?php //if ($es_super): ?>
  <div class="card card-custom mt-4">
    <div class="card-body">
      <h5 class="card-title text-lila mb-3"><i class="bi bi-shield-lock-fill me-2"></i>Administradores del Sistema</h5>
      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
          <thead class="table-primary text-center">
            <tr>
       
              <th>Nombres</th>
              <th>Apellidos</th>
             
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
             // $consulta = mysqli_query($conexion, "SELECT * FROM admin");
             // while ($admin = mysqli_fetch_assoc($consulta)):
            ?>
              <tr class="text-center">
            
                <td><?php// echo $admin['nombres']; ?></td>
                <td><?php// echo $admin['apellidos']; ?></td>
      
                <td>
                  <button  class="btn btn-sm btn-secondary" data-bs-target="#ver_admin<?php// echo $admin['id_admin']; ?>" data-bs-toggle="modal" ><i class="bi bi-eye"></i></button>
                  <button  class="btn btn-sm btn-danger" data-bs-target="#eliminar_<?php// echo $admin['id_admin']; ?>" data-bs-toggle="modal" ><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              
              <?php
            //   ob_start();
            //   include 'modal_ver_admin.php';
            //    include 'modal_eliminar_admin.php';
            //    $modales[] = ob_get_clean();
              
              ?>

            <?php // endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php
        //   if (!empty($modales)) {
        //     foreach ($modales as $modal) {
        //       echo $modal;
        //     }
        //   }
          ?>
<?php // endif; ?>

    
    
  </div>
</div>
</body>
</html>