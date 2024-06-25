
<nav id='menu'>
      <img src="logo.jpg" width="60" height="60">
      <h2>Hospital Castex</h2> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="script.js"></script>
  <ul>
    <li><a href='recetar.php'>Inicio</a></li>
    <li><a href='verStock.php'>Ver stock</a></li>
    <li><a onclick="add()">Nuevo medicamento</a></li>
    <li><a onclick="add()">Agregar medicamento</a></li>
    <li><a href='verSalidas.php'>Ver salidas</a></li>
    <li><a class="dropdown-arrow">Usuario: <?= session_start(); $_SESSION['user'] ?></a>
        <ul class="sub-menus">
           <li><a href='./view_config.php'>Configuración</a></li> 
           <li><a href='logout.php'>Cerrar Sesion</a></li> 
        </ul>
    </li>
  </ul>
</nav>