<?php
include_once('utilidades.php');
 

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	
	
/*var_dump($_SESSION['loggedin']); 
var_dump($_SESSION['userid']);
var_dump($_SESSION['username']);*/

} else {
   echo "Inicia Sesion para acceder a este contenido.<br>";
   echo "<br><a href='login.html'>Login</a>";
   echo "<br><br><a href='index.html'>Registrarme</a>";
   header('Location: login.php');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion


exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();
header('Location: login.php');//redirige a la página de login, modifica la url a tu conveniencia
echo "Tu sesion a expirado,
<a href='login.php'>Inicia Sesion</a>";
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>NEMAapp</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="APPMO Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />

<script src="js/jquery-2.2.3.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>

<!---- start-smoth-scrolling---->
</head>
<body>
	<div class="header" id="home">
		<div class="container">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="navigation">
			 <span class="menu"></span> 
				<ul class="navig">
					<li><a href="index.html" class="scroll">Home</a><span> </span></li>
					<li><a href="#preguntas" class="scroll">Preguntas</a><span> </span></li>
					<li><a href="#servicios" class="scroll">Servicios</a><span> </span></li>
					<li><a href="#contact" class="scroll">Contacto</a><span> </span></li>
					<li><a href="logout.php" class="scrol">Cerrar sesion</a><span> </span></li>
				</ul>
			</div>
			<!-- script-for-menu -->
			<script>
					$("span.menu").click(function(){
						$(" ul.navig").slideToggle("slow" , function(){
						});
					});
			</script>
			<!-- script-for-menu -->
		</div>
	</div>
	<!--start-banner-->
	<div class="banner">
		<div class="container">
			<div class="banner-bottom">
				<div class="col-md-4 banner-right">
					<a href="#QueEsNema" class="scroll">¿Que es NEMAapp?</a>
				</div>
				<div class="col-md-4 banner-middle">
					<img src="images/app-1.png" alt="" />
				</div>
				<div class="col-md-4 banner-right">
					<a href="cuestionario.php">Proceso Indagatorio</a>
				</div>
				<div class="clearfix"></div>

				<!--<div class="col-md-4 banner-right" style="margin-top: -10">
					<a href="#">¿Que es NEMAapp?</a>
				</div>
				
				<div class="col-md-4 banner-right" style="margin-top: -10">
					<a href="#">LEARN MORE</a>
				</div>
				<div class="col-md-4 banner-right" style="margin-top: -10">
					<a href="#">LEARN MORE</a>
				</div>
				<div class="clearfix"></div>-->

			</div>
			<!--<div class="banner-top">
				<h1>Lorem ipsum dolor sit</h1>
				<p>sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec.</p>
			</div>-->
		</div>
	</div>
	<!--start-banner-->
	<!--start-feature-->
	<div class="feature" id="QueEsNema">
		<div class="container">
			<div class="feature-main">
				<h3>¿Que es NEMAapp?</h3>
				<p aling="justify">
					Nema es un proyecto basado en velocidad de atención y resolución de patologías 
					médicas, que cumple una función de educación para el paciente, de promoción y 
					prevención. NEMA se convertirá en una muy útil herramienta del sistema médico. 
					Ya que es muy difícil para muchas personas acceder a un especialista. NEMA te 
					brinda esa opción, resolver patologías de manera temprana, reduciendo el 
					tiempo de acción y evitando mayores consecuencias. En un principio esta 
					inteligencia Artificial está especializada en el campo de la Urología para el 
					diagnóstico y el manejo de infecciones urinarias, para posteriormente convertirse 
					en una ayuda para el diagnóstico y manejo de una gama amplia de patologías 
					urológicas y demás especialidades médicas. Nuestra visión de futuro es un sistema 
					integrado
				</p>

				<div class="screen-bottom">
				<iframe class="video" src="https://www.youtube.com/embed/qZkyqoklIIk" ></iframe>

				</div>
			</div>
				<div class="feature-bottom">
					<div class="col-md-6 feature-bottom-left">
					
						
					
					</div>
					<div class="col-md-6 feature-bottom-left">
						
						
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
	<!--end-feature-->
	
	
	<!--start-app1-->
	<div class="app1" id="preguntas">
		<div class="container">
			<div class="app1-top">
				<h3>Preguntas</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur</p>
			</div>	
				<div class="app1-bottom">
					<div class="col-md-6 app1-left">
						<div class="app1-main">
					
							<h4>dolor sit amet, consectetuer adipiscing elit</h4>
							<p>natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
						</div>
						<div class="app1-main">
						
							<h4>dolor sit amet, consectetuer adipiscing elit</h4>
							<p>natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
						</div>
						<div class="app1-main">
					
							<h4>dolor sit amet, consectetuer adipiscing elit</h4>
							<p>natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
						</div>
					</div>
					<div class="col-md-6 app1-left">
						<div class="app1-main">
					
							<h4>dolor sit amet, consectetuer adipiscing elit</h4>
							<p>natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
						</div>
						<div class="app1-main">
					
							<h4>dolor sit amet, consectetuer adipiscing elit</h4>
							<p>natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
						</div>
						<div class="app1-main">
					
							<h4>dolor sit amet, consectetuer adipiscing elit</h4>
							<p>natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
	<!--end-app1-->

	<!--start-member-->
<!--	<div class="member" id="servicios">
		<div class="container">
			<div class="member-top">
				<h3>Servicios</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur</p>
			</div>
			<div class="member-bottom">
				<div class="col-md-3 member-bottom-left">
					<div class="member-one">
						<div class="mem-back">
							<p>29<span>$</span></p>
							<label>Servicio 1</label>
						</div>
						<div class="mem-two">
							<h5>1 Websites</h5>
							<h5>1 User</h5>
							<h5>2 gb Storage</h5>
							<h5>1000 GB Bandwith</h5>
							<h5>Support Ticjet System</h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 member-bottom-left">
					<div class="member-one">
						<div class="mem-back">
							<p>50<span>$</span></p>
							<label>Servicio 2</label>
						</div>
						<div class="mem-two">
							<h5>1 Websites</h5>
							<h5>1 User</h5>
							<h5>2 gb Storage</h5>
							<h5>1000 GB Bandwith</h5>
							<h5>Support Ticjet System</h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 member-bottom-left">
					<div class="member-one">
						<div class="mem-back">
							<p>80<span>$</span></p>
							<label>Servicio 3</label>
						</div>
						<div class="mem-two">
							<h5>1 Websites</h5>
							<h5>1 User</h5>
							<h5>2 gb Storage</h5>
							<h5>1000 GB Bandwith</h5>
							<h5>Support Ticjet System</h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 member-bottom-left">
					<div class="member-one">
						<div class="mem-back">
							<p>152<span>$</span></p>
							<label>Servicio 4</label>
						</div>
						<div class="mem-two">
							<h5>1 Websites</h5>
							<h5>1 User</h5>
							<h5>2 gb Storage</h5>
							<h5>1000 GB Bandwith</h5>
							<h5>Support Ticjet System</h5>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>-->
	<!--end-member-->
	<!--end-team-->
	<!--<div class="team" id="testimonials">
		<div class="container">
			<div class="team-top">
				<h3>Equipo</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur</p>
			</div>


			<div class="screen-bottom">
				<div class="col-md-12 member-bottom-left">
					<div class="member-one">
						<div class="mem-back">
							<p>29<span>$</span></p>
							<label>Servicio 1</label>
						</div>
						<div class="mem-two">
							<h5>1 Websites</h5>
							<h5>1 User</h5>
							<h5>2 gb Storage</h5>
							<h5>1000 GB Bandwith</h5>
							<h5>Support Ticjet System</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="team-bottom">
				
				<div class="col-md-12 team-left">
					<img src="images/team-back.png" alt=""/>
					<div class="team-one">
						<img src="images/team-3.png" alt=""/>
						<h4>Osama Elwan</h4>
						<h5>Web Dsigne</h5>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing Aenean commodo</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>-->
	<!--end-team-->
	
	
	<!--start-contact-->
	<div class="contact" id="contact">
		<div class="container">
			<div class="contact-top ">
				<h3 class="text_white">Contactanos</h3>
				<p class="text_white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur</p>
			</div>
			<div class="contact-bottom">
				<form>
					<div class="col-md-6 contact-left">
						<input type="text" name="nombreContact" id="nombreContact" value="Tu Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tu Nombre';}"/>
						<input type="text" name="correoContact" id="correoContact" value="Tu Correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tu Email ';}"/>
					</div>

					<div class="col-md-6 contact-textarea">
						<textarea value="Your Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Tu mensaje</textarea>
					</div>
					<div class="contact-submit">
						<input type="submit" value="Submit" />
					</div>
				<form>
		</div>
	</div>
	<!--end-contact-->
	<!--start-footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
			<div class="col-md-12 d-flex">
						<h6 class="text_white">NEMAapp<span>Bogotá, Colombia</span></h6>
						<p class="text_white">Telf: 8643456</p>
						<p class="text_white"><a class="text_white" href="mailto:example@email.com">nema@dominio.com</a></p>
						<p class="text_white">pagina.com</p>
					</div>
			</div>
		</div>
		 <script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--End-footer-->			
</body>
</html>