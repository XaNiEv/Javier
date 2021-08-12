<?php

include 'login.php';

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$password=$_POST['password'];

$query="INSERT INTO usuario(nombre, email, password)
VALUES('$nombre','$email','$password')";

$email_no_repet=mysqli_query($conexion, "SELECT * FROM usuario WHERE email='$email' ");
if(mysqli_num_rows($email_no_repet)>0){
    echo ' <script> alert ("El correo ya existe en la base de datos");
    window.location="../Javier/index.html";
    </script>
    ';
    exit();
}

$enviar=mysqli_query($conexion, $query);

if($enviar){
echo ' <script> alert ("Su registro fue exitoso");
window.location="../Javier/index.php";
</script>
';
}else {
    echo ' <script> alert ("Su registro no fue exitoso, intente nuevamente");
window.location="../Javier/index.php";
</script>
';
}
mysqli_close($conexion);

?>