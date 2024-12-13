<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Metas recomendadas -->
	<meta charset="UTF-8">
	<title>Contacto enviado| Blog de Nicolás Alcaide Delaire</title>
	
	<!-- Metas recomendadas para posicionamiento Web -->
	<meta name="description" content="Blog de Nicolás Alcaide para la Actividad 1 de la asignatura Aplicaciones en red de la UNIR"/>
	<meta name="keywords" content="Nicolas Alcaide, blog de tecnología, UNIR, Aplicaciones en red, Actividad 1"/>
	<meta name="robots" content="index"/>
	
	<!-- Otras metas recomendables -->
	<meta name="author" content="Nicolás Alcaide" />
	<meta name="copyright" content="Propietario del copyright: Nicolás Alcaide" />
    
	<!-- Fichero de hoja de estilos -->
   <link rel="stylesheet" href="css/styles.css">
   
</head>
<body>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Recibir los datos del formulario
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$correo = $_POST['correo'];
		$tema = $_POST["tema_consulta"];
		$comentario = $_POST["comentario"];
	
		// Configuración del correo
		$to = "nalcaide@ditea.es, $correo";  // Mi dirección de correo + la dirección de correo del que rellena el formulario
		$subject = "Nuevo mensaje de $nombre $apellidos";
		$message = "Nombre: $nombre\nApellidos: $apellidos\nCorreo: $correo\nTema: $tema\nMensaje: $comentario";
		$headers = "From: $correo" . "\r\n" .
               "Reply-To: $correo" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();		
	}
	?>
	
    <!-- Menu Principal -->
	<nav class="menuprincipal">
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="quien-soy.html">Quién Soy</a></li>
            <li><a href="actualidad.html">Actualidad</a></li>
            <li><a href="contacto.html">Contacto</a></li>
        </ul>
    </nav>

	<!-- Caja cabecera -->
    <header class="header">
        <div class="header-content">
			<h1>Contacto</h1>
			<p>Formulario de contacto</p>
		</div>	
    </header>
	
	
	 <div class="contenido">		
			<?php
				if (mail($to, $subject, $message, $headers)) {
			?>
				 <h2>Correo enviado con éxito</h2>
			<?php
				} else {
			?>
				<h2>Fallo en el envío del correo</h2>
			<?php	
				}
			?>		
	
    </div>
		
	<!-- Pie de pagina -->
    <footer class="footer">
        <p>Actividad 1 - Implantación de aplicaciones Web - UNIR</p>
    </footer>
</body>
</html>
