<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="css/imagenes/a2.png">
    <title>FRAML</title>
</head>
<body style="background-color: #fdfd96;">
    <header style="background-color: #84b6f4; border: 5px solid pink;  position: fixed; z-index: 100; width: 100%;">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="css/imagenes/logoport.jpg" style="height: 50px;width: 50px;" >
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="menuP.html">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pedidos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Lugares</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Perfil
                    </a>
                    <ul class="dropdown-menu" style="background-color:lightgray">
                      <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                      <li><a class="dropdown-item" href="#">Cerrar sesion</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <br>
    <br>
    <br>
    <div style="display: flex;">
    <section style="width: 250px;border: 4px solid black;margin-left: 10px;margin-top: 10px;border-radius: 10%;background-color: #336ca5;">
        <a href="pedidos.html"><img src="css/imagenes/logo.png" style="width: 250px;height: 250px;"></a>
        <p style="color: azure;text-align: center;">Hamburguesas Don Sabino</p>
    </section>
    <?php if(isset($_GET['success'])){?>
    <p class="success" style="margin-left: 4%; margin-top: 10%; font-family: Times;
     font-size: 40px"><?php echo $_GET['success']?></p>
  <?php } ?>
  </div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>