<?php 

$tipoComida = isset($_POST['tipo']) ? $_POST['tipo'] : '';
$numero = isset($_POST['numero']) ? $_POST['numero'] : '';
$lechuga = isset($_POST['lechuga']) ? $_POST['lechuga'] : '';
$jitomate = isset($_POST['jitomate']) ? $_POST['jitomate'] : '';
$cebolla = isset($_POST['cebolla']) ? $_POST['cebolla'] : '';
$picante = isset($_POST['picante']) ? $_POST['picante'] : '';

$cliente = 1;

if($tipoComida == 'Hamburguesa 1'){
    $numTipoComida = 7;

}elseif($tipoComida == 'Hamburguesa 2'){
    $numTipoComida = 8;


}elseif($tipoComida == 'Hamburguesa 3'){
    $numTipoComida = 9;

}elseif($tipoComida == 'Hot dog 1'){
    $numTipoComida = 10;

}elseif($tipoComida == 'Hot dog 2'){
    $numTipoComida = 11;

}

try{

    $conexion = new PDO('mysql:host=localhost;port=3307;dbname=donsabinobd', 'root','');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO pedido(idProducto, Cantidad, cliente) VALUES(?,?,?)');
    $pdo->bindParam(1, $numTipoComida);
    $pdo->bindParam(2, $numero);
    $pdo->bindParam(3, $cliente);

    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');
   



}catch(PDOException $error){
    echo $error->getMessage();
    die();
}

?>