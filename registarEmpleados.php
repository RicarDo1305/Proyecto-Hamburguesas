<?php 

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$edad = isset($_POST['edad']) ? $_POST['edad'] : '';
$seguroSocial = isset($_POST['seguroSocial']) ? $_POST['seguroSocial'] : '';
$rfc = isset($_POST['rfc']) ? $_POST['rfc'] : '';


try{

    $conexion = new PDO('mysql:host=localhost;port=3307;dbname=donsabinobd', 'root','');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO empleados(Nombre, Telefono, Email, Edad, Segurosocial, RFC) VALUES(?,?,?,?,?,?)');
    $pdo->bindParam(1, $nombre);
    $pdo->bindParam(2, $telefono);
    $pdo->bindParam(3, $email);
    $pdo->bindParam(4, $edad);
    $pdo->bindParam(5, $seguroSocial);
    $pdo->bindParam(6, $rfc);

    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');
    



}catch(PDOException $error){
    echo $error->getMessage();
    die();
}

?>