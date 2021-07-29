<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Necesitamos del apoyo de la comunidad, por eso recurrimos a personas que sientan como nosotros la misma urgencia que esta problemática demanda"/>
	<title>Voluntariado</title>
	<link rel="stylesheet" type="text/css" href="css/estiloss.css">
</head>
<body>


<div class="contenedorpagina">

<?php include "partials/header.php" ?>


    <div class="video">
    <iframe width="1280" height="670" src="https://www.youtube.com/embed/Ezb_E_BSFjQ" class="videoo" frameborder="0" allow="accelerometer; 
        autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>


    <div class="form">
        <h1>Datos personales</h1>

    <form class="formulario" action="enviarmail.php" method="post">  
        <article>
        <label for="nombre" > Nombre* </label> <br>
        <input class="rectangulo" type="text" name="nombre" required> <br>
        </article>
        
        <article>
        <label for="apellido"> Apellido* </label> <br>
        <input class="rectangulo" type="text" name="apellido" required> <br>
        </article>

        <article>
        <label for="email"> Mail* </lavel> <br>
        <input class="rectangulo" type="email" name="email" required email> <br>
        </article>

        <article>
        <label for="fecha"> Fecha de nacimiento* </label> <br>
        <input class="rectangulo fecha" type="date" name="fecha"  required> <br>
        </article>
        
        <article>
        <label for="telefono"> Teléfono </label> <br>
        <input class="rectangulo" type="tel" name="telefono" required> <br>
        </article>

        <article>
        <label for="ayuda"> ¿En que te interesa ayudar? </label> <br>
            <select class="rectangulo" name="ayuda">
                <option value="tareasoficina"> Tareas de oficina </option>
                <option value="feriayeventos"> Feria y eventos </option>
                <option value="callcenter"> Call center</option>
                <option value="comunicacion"> Comunicación</option>
                <option value="otros"> Otros</option>
            </select>
        </article>  


        <label for="mensaje"> Tu mensaje </label>
        <textarea name="mensaje" id="mensaje" cols="30" rows="10"> </textarea><br>


        <div class="boton">
        <input type="submit" class="enviar" value="¡Quiero ser voluntario!" >
        </div> 


    </form>
    </div>

    <div class="separados_video"> </div>


    <?php include "partials/footer.php" ?>


</div>

</body>
</html>