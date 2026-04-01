<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Carl Schmidt-Rottluff</title>
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
                        <h1>Carl Schmidt-Rottluff</h1>
                    </div>
                    <div class="setenta">
                        <img src="img/Saturday_exp.jpg">
                    </div>
                </div>
            </div>
        <div class="contenedor">
                           <h2>Biografía</h2>

                            <br><p>Karl Schmidt-Rottluff nació en 1884 en la localidad de Rottluff, cerca de Chemnitz. Durante sus años escolares asistió al Realgymnasium, donde entabló amistad con Erich Heckel. Ambos compartían inquietudes artísticas y literarias, interesándose en autores como Nietzsche. En 1905, tras iniciar estudios de arquitectura en la Real Universidad Técnica de Dresde, Schmidt-Rottluff, junto a Heckel, Kirchner y Bleyl, cofundó el grupo expresionista *Die Brücke*. El colectivo buscaba romper con la tradición académica, recurriendo a colores intensos, trazos firmes y la representación de la figura humana y la vida moderna desde una perspectiva emocional y directa.

                            <br><br>Schmidt-Rottluff destacó por su estilo austero y vigoroso, con formas simplificadas y contrastes cromáticos marcados. Además de la pintura al óleo, trabajó ampliamente el grabado en madera, medio que consideraba especialmente adecuado para transmitir energía y síntesis formal. Aunque Die Brücke se disolvió en 1913 debido a tensiones internas, Schmidt-Rottluff continuó desarrollando su lenguaje expresionista. Durante la Primera Guerra Mundial fue reclutado y sirvió como soldado en el frente oriental, experiencia que lo afectó profundamente y que marcó un periodo de introspección en su producción posterior.
                            
                            <br><br>Tras la guerra, su obra fue reconocida en museos y colecciones públicas alemanas, y se le ofrecieron oportunidades de exhibición y enseñanza. Sin embargo, con la llegada del régimen nazi en 1933, su carrera se vio abruptamente interrumpida. En 1937, sus obras fueron retiradas de museos y catalogadas dentro de la campaña de “Arte Degenerado”. Se le prohibió exponer y muchos de sus cuadros y grabados fueron confiscados. A pesar de estas restricciones, continuó pintando de forma reservada, enfocándose en motivos más contemplativos, como paisajes y naturalezas.
                            
                            <br><br>Tras el fin de la Segunda Guerra Mundial, Schmidt-Rottluff retomó un papel activo en la vida artística. En 1947 fue nombrado profesor en la Escuela Superior de Artes de Berlín, donde influyó en nuevas generaciones de artistas. Con el tiempo recibió reconocimientos y retrospectivas que valoraron su persistencia y contribución al expresionismo alemán. Falleció en 1976, dejando una obra marcada por la fuerza del color, la estructura clara de las formas y una dedicación constante a la búsqueda de expresión espiritual y humana a través de la pintura.</p>
                            

        </div>

      <script src="script.js"></script>
  </body>