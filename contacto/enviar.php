<!DOCTYPE>
<html>
<meta charset="utf-8">
	<meta charset="utf-8">
	<title>Alvaro Gili - Contacto</title>
	<link rel="shortcut icon" href="../imagenes/logo_a.png" type="image/x-icon">
	<link href="../css/main_styles.css" rel="stylesheet" />
	<script src="../js/prefixfree.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>

<body>
	<header>
		<div id="logo_header">
			Alvaro Gili
		</div>
		<div id="tex_header">
			<br>
			Desarrollo de software<br>
			Diseño web
		</div>
	</header>
	<nav>
		<div><a href="../.">Inicio</a></div>
		<div><a href="../curriculum">Curriculum</a></div>
		<div><a href="../disWeb">Diseño web</a></div>
		<div><a href="../otras">Otras actividades</a></div>
		<div><a id="menu_corriente" href="./">Contácto</a></div>
	</nav>
	<section>
		<?php 
		$nombre = $_POST['nombre']; 
		$from = $_POST['mail'];

		$header = 'From: ' . $nombre . "<" . $from . "> \r\n"; 
		$header = 'Reply-To: ' . $nombre . "<" . $from . "> \r\n"; 
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
		$header .= "Mime-Version: 1.0 \r\n"; 
		$header .= "Content-Type: text/plain"; 

		$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; $mensaje .= "Su e-mail es: " . $from . " \r\n\r\n"; 
		$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n\r\n";  
		
		$mensaje .= "\r\nEnviado el " . date('d/m/Y', time()); 

		$para = 'alvarogili@gmail.com';
		$asunto = "Mensaje enviado desde alvarogili.com.ar"; 

		mail($para, $asunto, utf8_decode($mensaje), $header); 
		header("refresh: 2; url=./");
		 ?>
		<h4 style="font-weight: normal; font-family: Calibri; text-align: center;"><big><big>&nbsp;
		Mensaje enviado Correctamente.</big></big></h4>
		<h4 style="font-weight: normal; font-family: Calibri; text-align: center;"><big><big>&nbsp;
		Aguarde un momento...</big></big></h4>
		<br/>
		<br/>
	</section>
</body>
</html>