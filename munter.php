<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Gabriele Münter</title>
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
                        <h1>Gabriele<br>Münter</h1>
                    </div>
                    <div class="setenta">
                        <img src="img/munter_afueras-murnau_1908.jpg">
                    </div>
                </div>
            </div>
        <div class="contenedor">
                           <h2>Biografía</h2>
                           <br><p>Gabriele Münter nació en Berlín en 1877. Desde joven mostró interés por el dibujo y la pintura, pero enfrentó las limitaciones impuestas a las mujeres en la educación artística formal. En 1897 viajó a Estados Unidos junto a su hermana para visitar familiares, y durante estos años desarrolló un hábito constante de dibujar escenas cotidianas. A su regreso en 1901 ingresó a la escuela privada de arte de la Phalanx, en Múnich, donde tomó clases con Vasily Kandinsky. Pronto inició una relación sentimental con él y se convirtió en una de sus colaboradoras y compañeras de viaje. Entre 1903 y 1909 la pareja recorrió diversas regiones de Europa y el norte de África; Münter se interesó en la simplificación de las formas y el uso expresivo del color, trabajando principalmente con pintura al óleo y grabado en madera.

                            <br><br>En 1911, Münter se unió al círculo de artistas que darían origen a Der Blaue Reiter, colectivo que impulsó una expresión espiritual del arte y la ruptura con el naturalismo académico. Durante sus años en Múnich, su casa en Murnau se convirtió en un punto de encuentro para artistas de vanguardia. Allí experimentó con colores intensos y contornos definidos, creando paisajes y retratos que capturaban la esencia emocional del motivo más que su apariencia. Con el estallido de la Primera Guerra Mundial en 1914, Kandinsky —ciudadano ruso— tuvo que abandonar Alemania. Münter lo acompañó por un tiempo, pero su relación terminó poco después. Profundamente afectada, guardó en secreto muchas de las obras de Kandinsky que permanecían en su posesión.

                            <br><br>Durante la década de 1920, Münter continuó trabajando de manera independiente, aunque recibió poco reconocimiento. Su producción se caracterizó por la introspección y el retorno a la vida doméstica y los retratos íntimos. Con el ascenso del régimen nazi en 1933, gran parte de la vanguardia fue condenada como “Arte Degenerado”, pero Münter conservó y protegió las obras de Der Blaue Reiter que había resguardado en Murnau. Gracias a ella, una parte crucial de la historia del expresionismo alemán sobrevivió. En 1949, donó más de mil obras —propias y de otros artistas— al Museo Estatal de Baviera, acto que consolidó su rol como figura central en la preservación de este movimiento.

                            <br><br>En sus últimos años, Münter fue reconocida por su contribución tanto como pintora como cuidadora del legado artístico de comienzos del siglo XX. Su obra recuperó visibilidad en exposiciones retrospectivas y estudios sobre el expresionismo. Falleció en 1962 en Murnau, dejando una producción marcada por la intensidad cromática, la síntesis de formas y una sensibilidad íntima, así como un papel decisivo en la historia cultural europea.</p>


        </div>

      <script src="script.js"></script>
  </body>