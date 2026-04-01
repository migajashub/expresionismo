<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Edvard Munch</title>
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
                        <h1>Edvard Munch</h1>
                    </div>
                    <div class="setenta">
                        <img src="img/7.png">
                    </div>
                </div>
            </div>
        <div class="contenedor">
                           <h2>Biografía</h2>
                            
                            <br><p>Edvard Munch nació en 1863 en Løten, Noruega, y creció en una familia marcada por la enfermedad y la pérdida. La muerte temprana de su madre y de una de sus hermanas influyó profundamente en su visión del mundo y en la sensibilidad melancólica que caracteriza su obra. Inició estudios en la Escuela de Arte y Diseño de Kristiania, donde se formó con artistas naturalistas locales, aunque pronto se sintió limitado por el academicismo. A finales de la década de 1880 viajó a París, donde lo impactaron las obras de Gauguin, Van Gogh y Toulouse-Lautrec; de ellos tomó la idea de que el arte debía expresar emociones internas más que reproducir la realidad de manera fiel.

                            <br><br>En 1893, Munch realizó una de sus pinturas más emblemáticas: El grito. Esta obra, parte de su serie “El Friso de la Vida”, articulaba temas como el amor, la ansiedad, la enfermedad y la muerte. Munch utilizó colores intensos y líneas ondulantes para transmitir la angustia existencial y la vulnerabilidad humana. Su estilo, cercano al simbolismo y el expresionismo temprano, se alejaba de la representación objetiva y se centraba en la vivencia emocional. A finales del siglo XIX y principios del XX exhibió sus trabajos en Alemania, donde encontró un público más receptivo y se vinculó a círculos artísticos progresistas.
                            
                            <br><br>Su vida personal estuvo marcada por conflictos emocionales y episodios de salud mental. En 1908 sufrió una crisis nerviosa, probablemente vinculada al estrés, el alcohol y tensiones afectivas. Fue internado en una clínica en Copenhague, donde recibió tratamiento. Tras su recuperación, su obra experimentó un cambio: continuó explorando temas existenciales, pero incorporó colores más claros, composiciones más serenas y un mayor interés por el paisaje y la cotidianeidad. Aun así, la intensidad emocional siguió siendo el núcleo de su producción.
                            
                            <br><br>Con el ascenso del régimen nazi en la década de 1930, Munch fue incluido entre los artistas calificados como “degenerados” por la propaganda oficial. Sus obras fueron retiradas de museos alemanes, aunque él permaneció en Noruega y continuó pintando de manera independiente. En sus últimos años vivió casi en aislamiento en su casa de Ekely, rodeado de sus cuadros, a los que trataba como seres vivos. Falleció en 1944, dejando una obra profundamente influenciada por su mundo interno, marcada por la tensión entre el dolor y la búsqueda de sentido.</p>
            
                            


        </div>

      <script src="script.js"></script>
  </body>