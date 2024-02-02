<?php 

$tipoAgua = isset($_POST['tipo']) ? $_POST['tipo'] : '';
$numero = isset($_POST['numero']) ? $_POST['numero'] : '';
$cliente = 1;

if($tipoAgua == 'Frutas'){
    $numTipoAgua = 1;

}elseif($tipoAgua == 'Naranja'){
    $numTipoAgua = 2;


}elseif($tipoAgua == 'Limon'){
    $numTipoAgua = 3;

}elseif($tipoAgua == 'Coca cola'){
    $numTipoAgua = 4;

}elseif($tipoAgua == 'Sprite'){
    $numTipoAgua = 5;

}elseif($tipoAgua == 'Fanta'){
    $numTipoAgua = 6;

}

try{

    $conexion = new PDO('mysql:host=localhost;port=3307;dbname=donsabinobd', 'root','');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO pedido(idProducto, Cantidad, cliente) VALUES(?,?,?)');
    $pdo->bindParam(1, $numTipoAgua);
    $pdo->bindParam(2, $numero);
    $pdo->bindParam(3, $cliente);

    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');
   



}catch(PDOException $error){
    echo $error->getMessage();
    die();
}

?>