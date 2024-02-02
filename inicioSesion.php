<?php 

session_start();


    $host = "localhost:3307";
    $user = "root";
    $pass = "";
    $db = "donsabinobd";

    $connection = mysqli_connect("localhost:3307", "root", "", "donsabinobd");

 

if(isset($_POST['numeroTelefono']) && isset($_POST['contrasena'])){

    $numeroTelefono = $_POST['numeroTelefono'];
    $contrasena = $_POST['contrasena'];
    $contrasena = md5($contrasena);

    if(empty($numeroTelefono) || empty($contrasena)){
        header('location: inicioSesionV.php?error=Campos vacios');
    }else{

        $query = "SELECT * FROM usuarios WHERE Telefono = '$numeroTelefono' && Contrasena = '$contrasena'";
        $resultado = mysqli_query($connection, $query);


    if(mysqli_num_rows($resultado) > 0){
        
        header('location: MenuP SI.php?success=Te damos la bienvenida a Wild Rift');
    }else{
        header('location: inicioSesionV.php?error=Error en los datos');
        exit();
    }
  } 
}


?>