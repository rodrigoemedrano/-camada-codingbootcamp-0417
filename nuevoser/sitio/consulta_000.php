<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<title>Contacto | Espacio Nuevo Ser</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="window-target" content="_top" />
		<meta name="author" content="Innova Desarrollo Web - Diseño Web en Traslasierra" />
		<meta name="generator" content="Aptana" />
		<meta name="robots" content="all" />
		<meta name="description" content="Espacio Nuevo Ser" />
		<meta name="keywords" content="yoga, masajes, reiki, traslasierra, tarot, registros akashicos, flores de bach, memoria celular, pilates" />
		<meta name="viewport"content="width=device-width,initial-scale=1.0"/>
        <link href="imagenes/miniatura_face.jpg" rel="image_src" />
		<link rel="icon" type="image/png" href="imagenes/favicon.png"/>
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
		  <script type='text/javascript' src='js_slider/jquery.min.js'></script>
         <script type='text/javascript' src='js_slider/jquery.mobile.customized.min.js'></script>
         <script type='text/javascript' src='js_slider/jquery.easing.1.3.js'></script> 
         <script type='text/javascript' src='js_slider/camera.min.js'></script> 
         <script type='text/javascript'>
		 jQuery(function(){
			jQuery('#camera_wrap_4').camera({
				height: 'auto',
				loader: 'none',
				pagination: false,
				thumbnails: false,
				hover: false,
				opacityOnGrid: false,
				imagePath: '../images/',
				fx: 'simpleFade',
				time: 2000,
				transPeriod: 4500,
				playPause: false,
				navigation: false
				
				
			});

		 });
	     </script>       
		 <script type="text/javascript" src="media_queries.js"></script>
	</head>
    <body id="contacto" >
    	<div id="contenedor_principal">
    		<div id="franja_superior">
    			<div id="contenedor_franjasuperior">
					<div id="redes_sociales">
    			</div>
					<p id="tel">3544 51 7352 |</p>
					<p id="email">espacionuevoser@gmail.com | </p>
					<a id="boton_face" href="https://www.facebook.com/yoga.anandi?ref=ts&fref=ts">Facebook</a>
				</div>
    		</div><!-- fin franja superior -->
			<div id="franja_superior_dos">
				<div id="contenedor_menu">
					<div id="logo"></div><!-- fin logo -->
					<div id="menu">
								<ul id="lista_principal">
									<li><a id="boton_inicio" href="index.html">Inicio</a></li>
									<li><a id="boton_quienessomos" href="quienessomos.html">Quienes somos</a></li>
									<li><a id="boton_actividades" href="#">Actividades</a>
											<ul id="lista_secundaria">
													<li><a id="boton_yoga" href="yoga.html">Yoga</a></li>
													<li><a id="boton_reiki" href="reiki.html">Reiki</a></li>
													<li><a id="boton_tarot" href="tarot.html">Tarot</a></li>
													<li><a id="boton_registros" href="registros.html">Registros Akashicos</a></li>
													<li><a id="boton_flores" href="flores.html">Flores de Bach</a></li>
													<li><a id="boton_masajes" href="masajes.html">Masajes</a></li>
													<li><a id="boton_psicologia" href="psicologia.html">Psicologia</a></li>
													<li><a id="boton_memoria" href="memoria.html">Memoria Celular</a></li>
												</ul></li>
									<li><a id="boton_articulos" href="articulos.html">Art&iacute;culos</a></li>
									<li><a id="boton_contacto" href="contacto.html">Contacto</a></li>
								</ul>
							</div><!-- fin menu -->
							<div class="clear"></div>
				</div><!-- fin contenedor menu -->
			</div><!-- fin franja superior dos -->

			<div id="presentacion">
				<h1>Contactanos!</h1>
			<div id="contenedor_cuerpo">
				<div id="slider" class="fluid_container">
    			<div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                    <div  data-src="imagenes/slides/contacto01.jpg"></div>
                    <div  data-src="imagenes/slides/contacto02.jpg"></div>
                    <div  data-src="imagenes/slides/contacto03.jpg"></div>
			    </div><!-- #camera_wrap_4 -->
            	</div><!-- .fluid_container -->
				<div id="cuerpo">
					<div id="contenedor_articulos">
					<div id="columna_uno">
					
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
$mensaje .= "Lugar de residencia: " . $_POST['origen'] . " \r\n";
$mensaje .= "Mensaje: " . $_POST['consulta'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'paulasantiag@gmail.com';
$asunto = 'Consulta desde la web';

mail($para, $asunto, $mensaje, $header);

print ("<strong>Su mensaje fue enviado correctamente. Muchas gracias por ponerse en contacto con nosotros.</strong>");


  ?>
				</div>
				
				<div id="columna_dos">
					<div id="datos_contacto">
						<h3>Datos de Contacto</h3>
						<p>Dirección: Jorge R Recalde s/nº <br /> Mina Clavero - Traslasierra</p>
						<p>Teléfono: 3544 51 7352</p>
						<p>Email: espacionuevoser@gmail.com</p>
					</div>
				</div>
				<div id="ubicacion" class="clear">
					<h3>Ubicación</h3>
					<a id="mapa" class"external" href="https://goo.gl/maps/GpJhpyNx2mq"><img src="imagenes/mapa.gif" alt="mapa con la ubicacion del espacio nuevo ser en mina clavero" /></a>
				</div>
					</div>
				</div>
				
				</div><!-- fin cuerpo -->
			</div><!-- fin contenedor cuerpo -->
			<div id="franja_inferior">
				<div id="pie">
					<div class="columnas_pie">
					<div id="logo_pie"></div>
				</div>
				<div class="columnas_pie" id="resumen_sitio">
				  <ul>
				  	 <li><a href="yoga.html">Yoga</a></li>
					 <li><a href="tarot.html">Tarot</a></li>
					 <li><a href="reiki.html">Reiki</a></li>
					 <li><a href="masajes.html">Masajes</a></li>
					 <li><a href="registros.html">Registros Akashicos</a></li>
					 <li><a href="flores.html">Flores de Bach</a></li>
					 <li><a href="memoria.html">Memoria Celular</a></li>
					 <li><a href="pscilogia.html">Psicologia</a></li>
					 <li><a href="quienessomos.html">Quienes somos</a></li>
					 <li><a href="contacto.html">Contactanos</a></li>
					 <li class="clear"></li>
				  </ul>
				</div>
				<div class="columnas_pie" id="datos">
				<p id="lugar">Mina Clavero - Traslasierra</p>
				<p id="tel_pie">3544 51 7352</p>
				<p id="email_pie">espacionuevoser@gmail.com</p>
				<p id="quienes">Paula Santiago - Oscar Mardones Ly</p>
				</div>
				<div class="clear"></div>
				</div><!-- fin pie -->
				<div id="innova"><a href="http://www.innovadesarrolloweb.com.ar">diseñado por</a></div>
			</div><!-- fin franja inferior -->
		</div><!-- fin contenedor principal -->					
	</body>
</html>

					
										