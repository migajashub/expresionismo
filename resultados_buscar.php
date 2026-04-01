<?php session_start();?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Resultados de búsqueda</title>
	</head>

	<body>
		<header>
				<div class="top_navbar_1">
					<a href="index.php" class="active">Inicio</a>
					<a href="galeria.php">Galería</a>
					<a href="artistas.php">Artistas</a>
					<a href="trasfondo.php">Trasfondo</a>
					<a href="tienda.php">Tienda.php</a>
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
				<div class="contenedor_ang">
				<?php
					include('conexion.php');

					$buscar = $_POST['buscar'];

					$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%'");
				?>
				<h3>
                <?php    
                echo "Se buscó: </h3><h4 style='text-decoration:underline'>".$buscar."</h4>"?>
					<p>Cantidad de Resultados: 
					<?php
						$nros=mysqli_num_rows($consulta);
						echo $nros;
					?>
					</p>
					
					<?php
						while($resultados=mysqli_fetch_array($consulta)) {
					?>
					<br><p>
					<?php	
							echo $resultados['nombre'] . " ";
							echo $resultados['bio'] ;
					?>
					</p>
					<?php
						}

						mysqli_free_result($consulta);
						mysqli_close($conexion);

					?>
					</contenedor>
			</div>
			</body>
		</html>