<?php

session_start();

if(!isset($_SESSION['usuario'])){
 header("location: ");
}
?>

<html>
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
    <center><h2>LOGIN-OOP-PDO</h2></center>
         <form class="form-horizontal" action="login_usuario.php" method="post">
          <h2>Iniciar Sesión</h2>
        <div class="form-group">          
          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Iniciar</button>
          </div>
        </div>
      </form>
    </div>

        <div class="container">
        <form class="form-horizontal" action="registro.php" method="post">
          <h2>Registro</h2>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nombre" id="inputEmail3" placeholder="Nombre" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Registrarse</button>
            </div>
          </div>
        </form>
      </div>                        
  </body>
</html>