<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Franz Marc</title>
    </head>



    <body>
        <header>
            <div class="top_navbar_1" id="header">
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
            <div class="artista_pagina">
                <div class="doscolumnas">
                    <div class="treinta">
                        <h1>Franz Marc</h1>
                    </div>
                    <div class="setenta">
                        <img src="img/marc_el-sueño_1912_exp.jpg">
                    </div>
                </div>
            </div>
        <div class="contenedor">
                           <h2>Biografía</h2>

                            <br><p>Franz Marc nació en Múnich en 1880. Inicialmente estudió teología y filosofía, pero finalmente se inclinó por la pintura, ingresando en la Academia de Bellas Artes de Múnich en 1900. Allí encontró el ambiente artístico conservador poco estimulante, buscando en cambio influencias externas. Durante un viaje a París en 1907, conoció la obra de Van Gogh y los fauvistas, cuyo uso expresivo del color marcó profundamente su desarrollo. Desde entonces, Marc empezó a interesarse en representar la espiritualidad interna de la naturaleza y los animales, a quienes consideraba seres más puros frente a la decadencia humana.

                            <br><br>En 1911, tras el rechazo de obras expresionistas en la exposición anual de la Neue Künstlervereinigung München, junto con Vasily Kandinsky organizó una muestra alternativa y cofundó la agrupación Der Blaue Reiter. El nombre remite a su fascinación por los caballos y a la búsqueda espiritual que ambos compartían. Marc creía que el color podía expresar sentimientos y estados del alma: el azul representaba lo espiritual y masculino, el amarillo lo femenino y alegre, el rojo la violencia y la materia. Estas ideas se reflejan en su obra, donde los animales se presentan con formas simplificadas y colores intensos, como símbolos de armonía interna y fuerza vital.

                            <br><br>Entre 1912 y 1914, Marc amplió su lenguaje visual gracias a sus encuentros con cubistas y futuristas. Su obra empezó a incorporar estructuras geométricas y ritmos dinámicos, manteniendo siempre la presencia simbólica de animales como ciervos, caballos, zorros y vacas. En este periodo produjo algunas de sus composiciones más conocidas, en las que lo figurativo y lo abstracto se equilibran para transmitir una visión espiritual del mundo.

                            <br><br>Con el inicio de la Primera Guerra Mundial en 1914, Marc fue reclutado por el ejército alemán. A pesar de sus reservas, creyó inicialmente que la guerra podría conducir a una renovación moral del mundo. Sin embargo, la experiencia del conflicto lo marcó profundamente. Continuó dibujando durante su servicio, pero su fe en la trascendencia espiritual empezó a tambalearse. En 1916, el ejército elaboró una lista de artistas considerados de importancia nacional que debían ser retirados del frente para protegerlos, pero antes de que la orden llegara, Franz Marc murió en combate cerca de Verdún, a los 36 años. </p>



        </div>

      <script src="script.js"></script>
  </body>