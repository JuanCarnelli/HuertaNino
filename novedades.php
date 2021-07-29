<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Leé las últimas novedades de Huerta Niño, el avance y el desarrollo de nuestros proyectos actuales como pasados y aprendé como hacer tu propia huerta."/>
	<title>Novedades</title>
	<link rel="stylesheet" type="text/css" href="css/estiloss.css">
</head>

<body>


	<?php
		$imagenes = [
			"https://i.postimg.cc/kXTD39Bs/nota1.png",
			"https://i.postimg.cc/PrXNRNrN/nota2.png",
			"https://i.postimg.cc/59q6g8JZ/nota3.png",
			"https://i.postimg.cc/rm5zvrrR/nota4.png",
			"https://i.postimg.cc/NFYLYj6J/nota5.png",
			"https://i.postimg.cc/Xq8qv6xV/nota6.png",
			"https://i.postimg.cc/Bnw8Ds3b/nota7.png",
			"https://i.postimg.cc/XvGrkhN8/nota8.png",
			"https://i.postimg.cc/15BVmwYp/nota9.png",
			"https://i.postimg.cc/nLyCRkCt/nota10.png",
			"https://i.postimg.cc/XYvGpqTt/nota11.png",
			"https://i.postimg.cc/7YwTrmXH/nota12.png"

		];

		$titulos = [
			"100 familias empiezan su huerta gracias a nuestro Programa Huertas Familiares",
			"La escuela N° 367 de Chaco nos cuenta sobre sus Huertas En Casa",
			"¡Te contamos cómo conseguir semillas de tu huerta!",
			"¡Las familias y los docentes son nuestros héroes de la alimentación!",
			"Las huertas familiares siguen multiplicándose por todo el país",
			"Armá tu Barrera Verde",
			"¿Ya tenés todo listo para el cambio de temporada?",
			"¡Feliz Día del Docente!",
			"Nuevo Escenario, nuevas soluciones",
			"Nuevos proyectos que nos deja la pandemia",
			"Es tiempo de comenzar una huerta en tu balcón",
			"¡Buenas noticias durante la cuarentena!"
		];
	
	
		$fechas = [
			"Oct 29, 2020",
			"Oct 29, 2020",
			"Oct 29, 2020",
			"Oct 29, 2020",
			"Oct 05, 2020",
			"Oct 05, 2020",
			"Oct 05, 2020",
			"Sep 11, 2020",
			"Jul 30, 2020",
			"Jul 30, 2020",
			"Jul 27, 2020",
			"May 18, 2020"
	];

	$i = 0;

	?>

	<div class="contenedorpagina">
        
    <?php include "partials/header.php" ?>
		
		<div class="introcentrado novedadesbanner">
		<h1 class="h2">Novedades</h1>
		<p>Conocé las novedades e historias del trabajo de Fundación Huerta niño en Argentina.</p>
		</div>
		
		<section class="contenedornovedades">
			
			
		  <?php foreach( $titulos as $item) { ?>
			<article class="novedadescajas">
				<a href="nota.php?id=<?php echo $i ?>"> 
					<img src="<?php echo $imagenes[$i]?> " alt="Niño plantando semillas" >
					<div class="infonota">
						<p class="fecha"> <?php echo $fechas[$i] ?></p>
						<h2 class="titulonota"><?php echo $item  ?></h2>
					</div>	
				</a>
			</article>
			<?php $i++; } ?>
			
			
		
		
		</section>
		
		
        <?php include "partials/footer.php" ?>
        
	</div>	
</body>
</html>
