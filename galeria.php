<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Galería expresionista</title>
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
            </div>
        </header>
        <div class="fondo2" id="main">
            <div class="contenedor">
                <h1>Galería</h1>


                <div class="gallery-controls">
                    <button id="filter-btn"><i class="fa fa-filter"></i></button>
                </div>
                  
                <div class="gallery">

                    <div class="gallery-item" 
                        data-title="Dangast Village Landscape" 
                        data-year="1909"
                        data-artist="Erich Heckel"
                        >
                    <img src="img/heckel_dangast-village-landscape_1909.jpg" 
                        data-large="img/heckel_dangast-village-landscape_1909_exp.jpg" 
                        alt="Dangast Village Landscape, 1909">
                    </div>

                    <div class="gallery-item"
                        data-title="Hombres en la mesa"
                        data-year="1913"
                        data-artist="Erich Heckel"
                        >
                        <img src="img/heckel_hombres-mesa_1913.jpeg"
                        data-large="img/heckel_hombres-mesa_1913_exp.jpeg"
                        alt="Heckel Hombres en la mesa, 1913">
                    </div>

                    <div class="gallery-item"
                        data-title="Casas en Murnau"
                        data-year="1909"
                        data-artist="Vasily Kandinsky"
                        >
                        <img src="img/kandinsky_casas-murnau_1909.jpg"
                        data-large="img/kandinsky_casas-murnau_1909_exp.jpg"
                        alt="Casas en Murnau, 1909">
                    </div>
                    <div class="gallery-item"
                        data-title="Interior, my dining room"
                        data-year="1909"
                        data-artist="Vasily Kandinsky"
                        >
                        <img src="img/kandisnky_interior-my-dining-room_1909.jpg"
                        data-large="img/kandisnky_interior-my-dining-room_1909_exp.jpg"
                        alt="Interior, my dining room, 1909">
                    </div>
                    
                    
                    <div class="gallery-item"
                        data-title="Am ruden tisch"
                        data-year="1907"
                        data-artist="Fritz Bleyl"
                        >
                        <img src="img/bleyl_am-runden-tisch_1907.jpg"
                        data-large="img/bleyl_am-runden-tisch_1907_exp.jpg"
                        alt="Am ruden tisch, 1907">
                    </div>

                    <div class="gallery-item"
                        data-title="Marcella"
                        data-year="19010"
                        data-artist="Ernst Ludwig Kirchner"
                        >
                        <img src="img/kirchner_artisin-marcella_1910.jpg"
                        data-large="img/kirchner_artisin-marcella_1910_exp.jpg"
                        alt="Marcella, 1910">
                    </div>
                    <div class="gallery-item"
                        data-title="Cuatro bañistas"
                        data-year="1910"
                        data-artist="Ernst Ludwig Kirchner"
                        >
                        <img src="img/kirchner_cuatro-bañistas_1910.jpg"
                        data-large="img/kirchner_cuatro-bañistas_1910_exp.jpg"
                        alt="Cuatro bañistas, 1910">
                    </div>
                    <div class="gallery-item"
                        data-title="Mujer bajo parasol japonés"
                        data-year="1909"
                        data-artist="Ernst Ludwig Kirchner"
                        >
                        <img src="img/kirchner_mujer-parasol_1909.jpg"
                        data-large="img/kirchner_mujer-parasol_1909_exp.jpg"
                        alt="Parasol japonés, 1909">
                    </div>
                    
                    <div class="gallery-item"
                        data-title="El sueño"
                        data-year="1912"
                        data-artist="Franz Marc"
                        >
                        <img src="img/marc_el-sueño_1912.jpg"
                        data-large="img/marc_el-sueño_1912_exp.jpg"
                        alt="El sueño, 1912">
                    </div>
                    <div class="gallery-item"
                        data-title="Afueras de Murnau"
                        data-year="1908"
                        data-artist="Gabriele Münter"
                        >
                        <img src="img/munter_afueras-murnau_1908.jpg"
                        data-large="img/munter_afueras-murnau_1908_exp.jpg"
                        alt="Afueras Murnau, 1908">
                    </div>
                    <div class="gallery-item"
                        data-title="La vaca amarilla"
                        data-year="1912"
                        data-artist="Franz Marc"
                        >
                        <img src="img/marc_vaca-amarilla_1912.jpg"
                        data-large="img/marc_vaca-amarilla_1912_exp.jpg"
                        alt="La vaca amarilla, 1912">
                    </div>

                    <div class="gallery-item"
                        data-title="Ziegelei"
                        data-year="1907"
                        data-artist="Franz Marc"
                        >
                        <img src="img/bleyl_ziegelei_1907.jpg"
                        data-large="img/bleyl_ziegelei_1907_exp.jpg"
                        alt="Ziegelei, 1907">
                    </div>

                    <div class="gallery-item"
                        data-title="Pferde auf der weide"
                        data-year="1908"
                        data-artist="Erich Heckel"
                        >
                        <img src="img/heckel_pferde-auf-der-weide_1908.jpg"
                        data-large="img/heckel_pferde-auf-der-weide_1908_exp.jpg"
                        alt="Pferde auf der weide, 1912">
                    </div>

                    <div class="gallery-item"
                        data-title="Paisaje con dos álamos"
                        data-year="1912"
                        data-artist="Vasily Kandinsky"
                        >
                        <img src="img/kandinsky_paisaje-alamos_1912.jpg"
                        data-large="img/kandinsky_paisaje-alamos_1912_exp.jpg"
                        alt="Paisaje alamos, 1912">
                    </div>

                    <div class="gallery-item"
                        data-title="Landschaft im herbst"
                        data-year="1910"
                        data-artist="Carl Schmidt-Rottluff"
                        >
                        <img src="img/Saturday.jpg"
                        data-large="img/Saturday_exp.jpg"
                        alt="Landschaft im herbst, 1910">
                    </div>

                    <div class="gallery-item"
                        data-title="Deichdurchbruch"
                        data-year="1910"
                        data-artist="Carl Schmidt-Rottluff"
                        >
                        <img src="img/schmidt-rottluff_deichdurchbruch_1910.jpg"
                        data-large="img/schmidt-rottluff_deichdurchbruch_1910_exp.jpg"
                        alt="Deichdurchbruch, 1910">
                    </div>

                </div>
                <div id="lightbox" class="lightbox">
                    <span class="close">&times;</span>
                    <div class="doscolumnas">
                        <div class="setenta">
                            <img class="lightbox-img" src="" alt="">
                        </div>
                        <div class="treinta">
                            <div class="lightbox-info">
                                <h2 id="lightbox-title"></h2>
                                <p id="lightbox-artist"></p>
                                <p id="lightbox-year"></p>
                                <p id="lightbox-desc"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                   <!-- Panel lateral -->
                   <div id="filter-panel" class="filter-panel">
                    <span id="close-panel" class="close-panel">&times;</span>
                    <h3>Filtrar por:</h3>
                            
                    <label>
                        Autor:
                        <select id="artist-filter">
                            <option value="all">Todos</option>
                            <option value="Erich Heckel">Erich Heckel</option>
                            <option value="Vasily Kandinsky">Vasily Kandinsky</option>
                            <option value="Ernst Ludwig Kirchner">Ernst Ludwig Kirchner</option>
                            <option value="Franz Marc">Franz Marc</option>
                            <option value="Gabriele Münter">Gabriele Münter</option>
                            <option value="Carl Schmidt-Rottluff">Carl Schmidt-Rottluff</option>
                        </select>
                    </label>
                                
                    <label>
                        Año:
                        <select id="year-filter">
                            <option value="all">Todos</option>
                            <option value="1908">1908</option>
                            <option value="1909">1909</option>
                            <option value="1910">1910</option>
                            <option value="1912">1912</option>
                            <option value="1913">1913</option>
                        </select>
                    </label>
                    <button id="apply-filters">Aplicar filtros</button>
                </div>
      <script src="script.js"></script>
  </body>