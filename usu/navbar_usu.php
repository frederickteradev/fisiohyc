

<div class="d-lg-none bg-white w-100 position-sticky top-0 z-3">
  <div
    class="container-fluid d-flex justify-content-start py-2 px-3 border-bottom"
  >
    <button
      class="btn btn-warning"
      type="button"
      data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasSidebar"
    >
      <i class="bi bi-list"></i> Menú
    </button>
  </div>
</div>
<!-- Sidebar para móviles -->

<div
  class="offcanvas offcanvas-start bg-warning text-white w-50"
  tabindex="-1"
  id="offcanvasSidebar"
>
  <div class="offcanvas-header position-relative">
    <div class="text-center flex-column w-100">
      <img
        src="../assets/logo-fisiohyc.png"
        alt="Logo"
        class="img-fluid"
        style="max-width: 120px"
      />
      <h5 class="offcanvas-title mt-2 mb-2">
        
      </h5>
      <h6 class="offcanvas-title text-white">
        <strong>C.I:</strong>
   
      </h6>
    </div>
    <button
      type="button"
      class="btn-close btn-close-white position-absolute top-0 end-0 m-2"
      data-bs-dismiss="offcanvas"
    ></button>
  </div>
  <div class="offcanvas-body p-0">
    <ul class="nav nav-pills flex-column">
      <li class="nav-item">
        <a class="nav-link text-white seleccion" href="home_usu.php">
          <i class="bi bi-speedometer2 me-2"></i> Inicio
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white seleccion" href="perfil_usu.php">
          <i class="bi bi-person-circle me-2"></i> Perfil
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white seleccion" href="productos.php">
          <i class="bi bi-box-seam me-2"></i> Buzón de Entrada
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white seleccion" href="mensajes.php">
          <i class="bi bi-chat-dots me-2"></i> Solicitar Citas
        </a>
      </li>
      <li class="nav-item btn-sm bg-white rounded-1 mt-auto">
       
        <a class="nav-link text-danger" href="cerrar_sesion.php">
          <i class="bi bi-box-arrow-right me-2"></i> Cerrar sesión
        </a>
       
      </li>
    </ul>
  </div>
</div>
<!-- Sidebar fijo para pantallas grandes -->

<nav
  class="navbar lila navbar-expand-lg navbar-dark bg-warning flex-column vh-100 p-0 d-none d-lg-flex"
  style="height: auto; width: 250px"
>
  <span class="navbar-brand text-center w-100 py-4" href="inicio.php">
    <a class="mb-3" href="inicio.php">
      <img
        src="../assets/logo-fisiohyc.png"
        alt="Logo"
        class="img-fluid"
        style="max-width: 120px"
      />
    </a>
    <br />
    <h5>
 
    </h5>
    <h6 class="seleccion mt-3">
      C.I:

    </h6>
  </span>

  <hr class="sidebar-divider my-0" />
  <ul class="nav nav-pills flex-column w-100 px-2">
    <li class="nav-item">
      <a class="nav-link text-white seleccion" href="home_usu.php">
        <i class="bi bi-speedometer2 me-2"></i> Inicio
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white seleccion" href="perfil_usu.php">
        <i class="bi bi-person-circle me-2"></i> Perfil
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white seleccion" href="buzon_de_entrada_usu.php">
        <i class="bi bi-box-seam me-2"></i> Buzón de Entrada
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white seleccion" href="solicitud_de_cita_usu.php">
        <i class="bi bi-chat-dots me-2"></i> Solicitud de Cita
      </a>
    </li>
    <li class="nav-item btn-sm bg-white rounded-1 mt-auto">
      <a class="nav-link text-danger" href="cerrar_sesion.php">
        <i class="bi bi-box-arrow-right me-2"></i> Cerrar sesión
      </a>
    </li>
  </ul>
</nav>