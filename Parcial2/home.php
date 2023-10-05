<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Inicio</title>
</head>
<body>
 <?php include 'conexion.php';?>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Cetis 107</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="card m-2">
      <h1>Sistema de gestión de control escolar</h1>
      <h3>Cetis 107</h3>
      <img src="cetis.jpg" alt="" width="20%"> 
    </div>
  </div>
</div><hr>
<footer class="text-center">
  <span>Cetis 107 web App &copy; 2023</span>
</footer>
  <script src="js/bootstrap.js"></script>
</body>
</html>