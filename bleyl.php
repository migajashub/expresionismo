<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Fritz Bleyl</title>
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
            </div>
        </header>
        <div class="fondo1">
            <div class="artista_pagina">
                <div class="doscolumnas">
                    <div class="treinta">
                        <h1>Fritz Bleyl</h1>
                    </div>
                    <div class="setenta">
                        <img src="img/bleyl_ziegelei_1907_exp.jpg">
                    </div>
                </div>
            </div>
        <div class="contenedor">
                           <h2>Biografía</h2>

                           <br><p>Fritz Bleyl nació en el reino de Sajonia en 1880. Estudió en la Real Universidad Técnica de Dresde, donde se formó como arquitecto. Durante sus años de estudio conoció a Ernst Ludwig Kirchner, Erich Heckel y Karl Schmidt-Rottluff. Compartían el interés por romper con el academicismo rígido y buscaban una expresión más espontánea y emocional en el arte. Junto con ellos, en 1905 Bleyl cofundó el grupo vanguardista Die Brücke, cuyo objetivo era abrir un “puente” hacia nuevas formas de creación alejadas del realismo convencional.

                            <br><br>En los primeros años del grupo, Bleyl produjo principalmente grabados y dibujos, destacándose por líneas fluidas y composiciones directas. Sus temas incluían retratos, desnudos y vistas urbanas, en las que se percibía una sensibilidad gráfica más delicada que la de sus compañeros. Además de su participación artística, Bleyl diseñó la identidad visual inicial del grupo, incluyendo invitaciones y carteles para sus exposiciones. Sin embargo, su relación con *Die Brücke* fue breve: hacia 1907 decidió retirarse. Prefería mantener una carrera estable como arquitecto y diseñador gráfico, y no se sentía cómodo con la creciente radicalidad estética y el estilo de vida bohemio que caracterizaba al círculo.

                            <br><br>Tras su separación del colectivo, Bleyl continuó trabajando en arquitectura y enseñanza, dedicándose a la docencia técnica y al diseño constructivo. Aunque siguió dibujando, lo hizo de manera más privada y distante del ambiente artístico que él mismo había ayudado a iniciar. Durante las décadas siguientes, mientras Die Brücke ganaba importancia histórica y sus antiguos compañeros alcanzaban notoriedad internacional, Bleyl permaneció en gran medida fuera del foco público, observando desde cierta distancia el desarrollo del expresionismo alemán.

                            <br><br>Con el paso de los años, su nombre fue reconocido principalmente por su papel como fundador del grupo, más que por una producción artística extensa. Aun así, su contribución fue clave en los primeros pasos de un movimiento que transformó el arte europeo. Fritz Bleyl falleció en 1966, dejando una trayectoria marcada por la discreción, pero también por el impulso inicial que ayudó a dar forma a una de las vanguardias más influyentes del siglo XX. </p>



        </div>

      <script src="script.js"></script>
  </body>