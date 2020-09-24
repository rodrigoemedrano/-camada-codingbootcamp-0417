<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<title>Espacio Prestadores</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="window-target" content="_top" />
		<meta name="author" content="Innova Desarrollo Web - Diseï¿½o Web en Traslasierra" />
		<meta name="generator" content="Aptana" />
		<meta name="robots" content="all" />
		<meta name="description" content="Turismo Activo de la Provincia de Cordoba" />
		<meta name="keywords" content="turismo, turismo alernativo, actividades, trecking, caminatas, cabalgatas, que hacer, paseos, excursiones" />
		<meta name="viewport"content="width=device-width,initial-scale=1.0"/>
        <link href="imagenes/miniatura_face.jpg" rel="image_src" />
		<link rel="icon" type="image/png" href="imagenes/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="cssgenerales/reset.css"  />
		<link rel="stylesheet" type="text/css" href="cssgenerales/estilos.css" />
		<link rel="stylesheet" type="text/css" href="cssgenerales/estilos_slider.css" />
        <script type="text/javascript"><!--//--><![CDATA[//><!--
         function prepareTargetBlank(){
         var className = 'external';
         var as = document.getElementsByTagName('a');
         for(i=0;i<as.length;i++){
         var a = as[i];
         r=new RegExp("(^| )"+className+"($| )");
         if(r.test(a.className)){
         a.onclick = function(){
         window.open(this.href);
         return false;
         }
      }
    }
}

window.onload = prepareTargetBlank;

         //--><!]]></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-26190583-8', 'auto');
  ga('send', 'pageview');

</script>		
		<script type="text/javascript" src="media_queries.js"></script>
		<script src='http://www.google.com/jsapi'></script>
		<script>
		google.load("prototype","1.7.0.0");
		google.load("scriptaculous", "1.9.0");
		</script>
	</head>
    <body id="prestadores_pagina" class="consulta">
    	<div id="principal">
    		<div id="franja_superior">
				<div id="encabezado">
					<div id="logo"></div><!-- fin logo -->
					<div id="menues">
						<div id="menu_dos">
							<ul>
								<li><a id="boton_prestadores" href="prestadores.html">ESPACIO PRESTADORES</a></li>
								<li><a id="boton_equipo" href="equipo.html">QUIENES SOMOS</a></li>
								<li><a id="boton_contacto" href="contacto.html">CONTACTO</a></li>
							</ul>
						</div><!-- fin menu_dos -->
						<div id="menu_uno">
							<ul id="lista_principal">
								<li><a id="boton_inicio" href="index.html">INICIO</a></li>
								<li><a id="boton_turismoalternativo" href="turismoalternativo.html">TURISMO ACTIVO</a></li>
								<li><a id="boton_actividades" href="#">ACTIVIDADES</a>
								<ul id="lista_secundaria">
										<li><a id="boton_listado_actividades" href="actividades.html">seg&uacute;ún TIPOS DE ACTIVIDAD</a></li>
										<li><a id="boton_regiones" href="regiones.html">seg&uacute;n REGIONES TUR&Iacute;STICAS</a></li>
										<li><a id="boton_localidades" href="localidades.html">seg&uacute;n LOCALIDADES</a></li>
									</ul></li>
								<li><a id="boton_experiencias" href="experiencias.html">EXPERIENCIAS</a></li>
								<li><a id="boton_mapas" href="mapas.html">MAPAS</a></li>
							</ul>
						</div><!-- fin menu_uno -->
						<div id="clear"></div>
					</div>
				</div><!-- fin encabezado -->
			</div><!-- fin franja_superior -->
			
			
			<div id="contenido">
				<h1>ESPACIO PRESTADORES</h1>
				<?php
			 
$nombre = $_POST['nombreyapellido'];
$mail = $_POST['mail'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain; charset=ISO-8859-1\n";

$mensaje = "Nombre y Apellido: " . $_POST['nombre'] . " \r\n";
$mensaje .= "Email: " . $_POST['mail'] . " \r\n";
$mensaje .= "Telefono: " . $_POST['telefono'] . " \r\n";
$mensaje .= "Tipo de Actividad: " . $_POST['actividad'] . " \r\n";
$mensaje .= "Empresa: " . $_POST['empresa'] . " \r\n";
$mensaje .= "Localidad: " . $_POST['origen'] . " \r\n";
$mensaje .= "Mensaje: " . $_POST['consulta'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'rodri_m08@hotmail.com';
$asunto = 'Solicitud de Anuncio';

mail($para, $asunto, $mensaje, $header);

print ("<strong>Su mensaje fue enviado correctamente. Muchas gracias por ponerse en contacto con nosotros.</strong>");


  ?>
			</div>
    	</div><!-- fin principal -->
<div id="pie">
			<div id="centro_pie">
				<div class="columnas_pie">
					<div id="socialmedia">
						<h3>Seguinos!</h3>
						<a id="boton_facebook_pie" href="https://www.facebook.com/turismoactivocordoba"></a>
						<a id="boton_youtube_pie" href="https://www.youtube.com/channel/UC0x918t57zs3sQj5PeJydfQ"></a>
					</div>
					<script>
					var f=new Date();
					var meses = new Array ("de Enero de","de Febrero de","de Marzo de","de Abril de","de Mayo de","de Junio de","de Julio de","de Agosto de","de Septiembre de","de Octubre de","de Noviembre de","de Diciembre de");
					document.write('<div class="mifecha">');
					document.write('<div class="dia">' + f.getDate() + '</div>');
					document.write('<div class="mes">' + meses[f.getMonth()] + '</div>');
					document.write('<div class="ano">' + f.getFullYear() + '</div>');
					document.write('</div>');
					</script>
				</div>
				<div class="columnas_pie" id="resumen_sitio">
					<h3>www.turismoactivocordoba.com</h3>
				  <ul>
				  	 <li><a href="actividades.html">Actividades por tipo</a></li>
					 <li><a href="regiones">Actividades por regiones tur&iacute;sticas</a></li>
					 <li><a href="localidades.html">Actividades por localidades</a></li>
					 <li><a href="experiencias.html">Experiencias</a></li>
					 <li><a href="mapas.html">Mapas</a></li>
					 <li><a href="prestadores.html">Descuentos para Prestadores</a></li>
					 <li><a href="prestadores.html">Anunciar en el sitio</a></li>
					 <li><a href="prestadores.html">Capacitaciones</a></li>
					 <li><a href="equipo.html">Quienes somos</a></li>
					 <li><a href="contacto.html">Contactanos</a></li>
					 <li><a href="turismoalternativo.html">Que es el Turismo Activo</a></li>
				  </ul>
				</div>
				<div class="columnas_pie" id="datos">
				<div id="logo_pie"></div>
				<p>contacto@turismoactivocordoba.com</p>
				<p>03544-15405957</p>
				<p>03544-15563650</p>
				</div>
				<div class="clear"></div>
			</div>
			
		</div><!-- fin pie -->   
</body>
</html>


					
			
								