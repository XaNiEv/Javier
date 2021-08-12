<?php

session_start();

include 'login.php';

$email=$_POST['email'];
$password=$_POST['password'];

$validacion=mysqli_query($conexion, "SELECT * FROM usuario WHERE email='$email' and password='$password' ");

if(mysqli_num_rows($validacion)>0){
    $_SESSION['usuario']=$email;
    header("location:../Javier/inicio.php");
    exit;
}else {
    echo '<script>
    alert("Usuario no existe");
    window.location="../Javier/index.php";
    </script>';
    exit;
}


?>