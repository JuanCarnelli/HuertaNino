<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Sumate a Huerta Niño y alivia la malnutrición infantil. ¡Dona ahora! Con tu donación más niños pueden  mejorar su alimentación."/>
	<title>Voluntariado</title>
	<link rel="stylesheet" type="text/css" href="css/estiloss.css">
</head>
<body>
    
<div class="contenedorpagina">
    
	<?php include "partials/header.php" ?>

	<main class="main_dona">
		<div class="banner banner_dona">
			<div class="info_banner_dona">
				<h1>¡Sumate a Fundación Huerta Niño!</h1>
				<p>Con tu apoyo, muchos más niños pueden tener una huerta en su escuela y mejorar su alimentación.</p>
			</div>
		</div>
		<div class="form form_donar">
			<div class="formulario formulario_donar">
				<section class="datos_formulario_donar datos_donación">
					<h2>Datos para donación</h2>
					<form class="formulario" action="enviarmail.php" method="post">
					<article class="articulos_donar">
       				 	<label for="montoadonar titulosformulario" >Monto a donar*</label><br>
        				<ul class="plata">
							<div class="bulets">
								<li class="numero"><input type="radio" name="boton" value="1">$100</li>
								<li class="numero"><input type="radio" name="boton" value="1">$200</li>
								<li class="numero"><input type="radio" name="boton" value="1">$300</li>
								<li class="numero"><input type="radio" name="boton" value="1">$400</li>
							</div>
							<div class="otro">
								<li><input type="radio" name="boton" value="1">Otro</li>
								<input class="monto" type="text" name="monto" placeholder="Monto" autofocus>
							</div>
						</ul>
					</article>
					<article class="articulos_donar">
        			<div class="tarjetas">
						<input class="tarjeta visa" type="button" name="visa" placeholder="" autofocus>
						<input class="tarjeta mercado_pago" type="button" name="mercado_pago" placeholder="" autofocus>
						<input class="tarjeta efectivo" type="button" name="efectivo" value="Efectivo" autofocus>
					</div>
					</article>
					<div class="seccion_datosparadonar ntarjeta_expiracion">
						<article class="articulos_donar nuemro_tarjeta">
							<label for="ntarjeta titulosformulario">Número de tarjeta*</label><br>
							<input class="rectangulo pegados input" type="text" name="numero_tarjeta" required><br>
						</article>
						<article class="articulos_donar fecha_expiracion">
							<label for="expiracion titulosformulario">Fecha de expiración*</label><br>
							<input class="rectangulo  input" type="date" name="expiracion" required><br>
						</article>
					</div>
					<div class="seccion_datosparadonar seguridad_dni_ndni">
						<article class="articulos_donar seguridad_dni">
							<label for="titulosformulario">Código de seguridad*</label><br>
							<input class="rectangulo inputs" type="text" name="codigo_seguridad" required> <br>
						</article>
						<article class="articulos_donar dni">
							<label for="titulosformulario">Tipo de documento*</label><br>
							<select class="rectangulo inputs" name="tipo_dni">
								<option selected>Seleccionar opción</option>
								<option value="dni">DNI</option>
								<option value="libreta">Libreta cívica</option>
								<option value="pasaporte">Pasaporte</option>
								<option value="cedula">Cedula de identidad</option>
							<select>
						</article>
						<article class="articulos_donar num_dni">
							<label for="titulosformulario">Número de documento*</label><br>
							<input class="rectangulo inputs" type="text" name="numero_dni" required><br>
						</article>
					</div>
				</section>
				<section class="datos_formulario_donar datos_personales">
        			<h2 class="separa_formulario">Datos personales</h2>
    				<form class="formulario" action="enviarmail.php" method="post">  
					<div class="seccion_datosparadonar nombre_apellido_email">
						<article class="articulos_donar">
							<label for="nombre titulosformulario">Nombre*</label><br>
							<input class="rectangulo inputs" type="text" name="nombre" required><br>
						</article>
						<article class="articulos_donar">
							<label for="apellido titulosformulario">Apellido*</label> <br>
							<input class="rectangulo inputs" type="text" name="apellido" required><br>
						</article>
						<article class="articulos_donar">
							<label for="email titulosformulario">Mail*</label><br>
							<input class="rectangulo inputs" type="email" name="email" required><br>
						</article>
					</div>
					<div class="seccion_datosparadonar nacimiento_telefono_dondevivis">
						<article class="articulos_donar">
							<label for="fecha titulosformulario">Fecha de nacimiento*</label> <br>
							<input class="rectangulo inputs" type="date" name="fecha"  required> <br>
						</article>
						<article class="articulos_donar">
							<label for="telefono titulosformulario">Teléfono*</label> <br>
							<input class="rectangulo inputs" type="tel" name="telefono" required> <br>
						</article>
						<article class="articulos_donar">
							<label for="ayuda titulosformulario">¿En que provincia vivís?*</label> <br>
							<select class="rectangulo inputs" name="provincia">
								<option selected> Seleccionar opción</option>
								<option value="caba">Ciudad Autónoma de Buenos Aires</option>
								<option value="bsas">Buenos Aires</option>
								<option value="catamarca">Catamarca</option>
								<option value="chaco">Chaco</option>
								<option value="chubut">Chubut</option>
								<option value="cordoba">Córdoba</option>
								<option value="corrientes">Corrientes</option>
								<option value="entrerios">Entre Ríos</option>
								<option value="formosa">Formosa</option>
								<option value="jujuy">Jujuy</option>
								<option value="lapampa">La Pampa</option>
								<option value="larioja">La Rioja</option>
								<option value="mendoza">Mendoza</option>
								<option value="misiones">Misiones</option>
								<option value="neuquen">Neuquén</option>
								<option value="rionegro">Río Negro</option>
								<option value="salta">Salta</option>
								<option value="sanluis">San Luis</option>
								<option value="sanjuan">San Juan</option>
								<option value="santacruz">Santa Cruz</option>
								<option value="santafe">Santa Fe</option>
								<option value="santiagodelestero">Santiago del Estero</option>
								<option value="yierradelfuego">Tierra del Fuego</option>
								<option value="tucuman">Tucumán</option>
							</select>
						</article>
					</div>
			</section>
			
        	<div class="boton boton_donar">
				<input type="submit" class="enviar" value="Doná a Fundación Huerta Niño">
			</div>
    	</form>
	</main>
	<div class="separados_donar"></div>	  
    <?php include "partials/footer.php" ?>

</body>
</html>