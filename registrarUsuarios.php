<?php 

$numeroTelefono = isset($_POST['numeroTelefono']) ? $_POST['numeroTelefono'] : '';
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';
$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
$referencias = isset($_POST['referencias']) ? $_POST['referencias'] : '';
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';


$contrasena = md5($contrasena);

try{

    $conexion = new PDO('mysql:host=localhost;port=3307;dbname=donsabinobd', 'root','');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO usuarios(Telefono, Contrasena, Direccion, Referencias, Nombre, Apellidos) VALUES(?,?,?,?,?,?)');
    $pdo->bindParam(1, $numeroTelefono);
    $pdo->bindParam(2, $contrasena);
    $pdo->bindParam(3, $direccion);
    $pdo->bindParam(4, $referencias);
    $pdo->bindParam(5, $nombre);
    $pdo->bindParam(6, $apellidos);

    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');
   



}catch(PDOException $error){
    echo $error->getMessage();
    die();
}

?>