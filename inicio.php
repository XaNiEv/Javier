<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("Acceso Restringido");
    window.location = "../Javier/index.php";
    </script>';
    session_destroy();
    die();
}

?>

<!DOCTYPE html>

<head>
    <title>Login en PHP</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
      .container{margin-top:100px}
    </style>
  </head>
  <body>

<div class="container">
<form class="form-horizontal" action="cerrar-sesion.php" method="">
    
    <center><h1>BIENVENIDO</h1></center>
         
          <h4>Realizado por</h4>
                    <h3>Alfonso Javier Montealegre Garzon</h3>
          <h4>SENA</h4>
                        
        <div>
            <button type="submit" class="btn btn-default">Cerrar Sesion</button>
          </div>
          
      </form>
    </div>
       

</body>
</html>|