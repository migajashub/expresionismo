<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Tienda</title>

    </head>

    <body>
        <header>
            <div class="top_navbar_1">
                <a href="index.php" class="active">Inicio</a>
                <a href="galeria.php">Galería</a>
                <a href="artistas.php">Artistas</a>
                <a href="trasfondo.php">Trasfondo</a>
                <a href="tienda.php">Tienda</a>
                <div class="dropdown">
                <i class="fa fa-user-circle"></i>
                <div class="dropdown_cont">
                    <?php if(isset($_SESSION['nombre'])){
                    echo "<a href='salir.php'>Cerrar sesion</a>";
                    }else{
                    echo "<a href='form_login.php'>Iniciar sesion</a>";
                    }
                    ?>
                </div>                   
              </div>
        </header>
        <div class="fondo1">
            <div class="contenedor">
            <?php
        if(is_null($_SESSION['nombre'])){
            header("Location:form_registro.php");

        }else {
            echo "<h2>¡Hola ";
            echo $_SESSION['nombre'].'!</h2>';
        }
        ?>
              <h1>Tienda</h1>
              <div class="artistas_flexbox">
                <div class="tienda_item">
                  <div class="tienda_item_img">
                    <img src="img/tienda1.png" alt="Prints varios (L)">
                  </div>
                  <div class="coso_artista">
                    <h4>Prints varios (L)</h4>
                    <p>$6000 ARS</p>
                  </div>
                </div>
                <div class="tienda_item">
                  <div class="tienda_item_img">
                    <img src="img/tienda2.png" alt="Cuadernos de tapa suave">
                  </div>
                  <h4>Libretas de tapa suave</h4>
                  <p>$8000 ARS</p>
                </div>
                <div class="tienda_item">
                <div class="tienda_item_img">
                  <img src="img/tienda3.png" alt="Mate expresionista">
                </div>
                  <h4>Mate expresionista</h4>
                  <p>$12000 ARS</p>
                </div>
                <div class="tienda_item">
                  <div class="tienda_item_img">
                    <img src="img/tienda4.png" alt="Vaso termo">
                  </div>
                  <h4>Vaso termo</h4>
                  <p>$12000 ARS</p>
                </div>
                <div class="tienda_item">
                  <div class="tienda_item_img">
                    <img src="img/tienda5.png" alt="Prints varios (M)">
                  </div>
                  <h4>Prints varios (M)</h4>
                  <p>$4000 ARS</p>
                </div>
                <div class="tienda_item">
                  <div class="tienda_item_img">
                    <img src="img/tienda6.png" alt="Buzos">
                  </div>
                  <h4>Buzos</h4>
                  <p>$32000 ARS</p>
                </div>
                <div class="tienda_item">
                  <div class="tienda_item_img">
                    <img src="img/tienda7.png" alt="Stickers">
                  </div>
                  <h4>Stickers (x3)</h4>
                  <p>$2000 ARS</p>
                </div>
              </div>
                  
            </div>
                  

        </div>
    </body>
</html>