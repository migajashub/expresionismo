<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Registrarse en MOVart</title>

    </head>

    <body>
    <header>
        <div class="top_navbar_2" id="header">
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
    <main>
    <div class="fondo2">
        <div class="contenedor">


            <div class="doscolumnas">
                <div class="left_gen">
                <h2>Registrate en MOVart</h2>
                <p>Disfruta de artículos en venta, eventos y noticias con una cuenta en MOVart</p><br>
                    <form action="registro.php" method="post" >
                        <label>Nombre</label>
                        <input type="text" name="nombre" required>
                        <label>Email</label>
                        <input type="email" name="email" required>
                        <label>Usuario</label>
                        <input name="usuario" type="text" maxlength="12">
                        <label>Contraseña</label>
                        <input type="password" name="password" maxlength="12">
                        <label>
                            <input name="newsletter" type="checkbox" value="si" checked="checked"> Deseo recibir novedades, convocaciones a eventos artísticos y 'obra del día' por mail.
                        </label>
                        <input type="submit" class="submit_contacto" value="Registrarse">	
                    </form>


                </div>
                <div class="right_gen">  
                <img src="img/movart.svg" class="pequeño">

                    <div class="logos_form">
                        <img src="img/logo_exp_osc_exp.png">
                        <img src="img/simulacion_kirchner.png">

                        <div class="centrado"><h4>¿Ya sos usuario?</h4><a href="form_login.php">Ingresá</a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>