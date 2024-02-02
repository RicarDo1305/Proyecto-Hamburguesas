<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="css/imagenes/a2.png">
    <title>FRAML</title>
</head>
<body style="background-color: #fdfd96;">

    <form id="formulario" action="inicioSesion.php" method="POST" class="container border border-primary border-2 rounded-3 position-absolute top-0 start-50 translate-middle-x mt-5 p-2 shadow p-1 rounded w-50  bg-success text-white border border-4 border-warning">
      <center><img src="css/imagenes/logo.png" style= "height:15rem" class="img-fluid"></center> 
      <h1 class="text-center">Productos y promociones</h1> 
      <h3>Hamburgesas don Sabino</h3>
        <br>

        <?php if(isset($_GET['error'])){?>
          <div class="bg-danger border border-1 border-white">
        <p class="error" style="text-align: center; font-family: Times;font-size: 16px;"><?php echo $_GET['error']?></p>
        </div>
        <?php } ?>

        <div class="mb-1 p-0">
          <label for="numeroTelefono" class="form-label fw-semibold">Numero de telefono</label>
          <input type="text" name="numeroTelefono" id ="numeroTelefono" class="form-control fw-lighter border-dark" placeholder="10 digitos del numero telefonico">
          <div id="noTelefonoHelp" class="form-text" style="color:blue;">Nunca compartimos tu numero telefonico con nadie.</div>
        </div>
        <div class="mb-1 p-0">
          <label for="contrasena" class="form-label fw-semibold">Contraseña</label>
          <input type="password" name="contrasena" class="form-control border-dark" id="contrasena">
        </div>
        <br>
        <button type="submit" class="btn btn-danger">Entrar</button>
      </form>
</body>

</html>