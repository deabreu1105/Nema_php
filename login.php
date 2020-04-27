<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>NEMAapp</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Validate Login & Register Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/styleLogin.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Magra:400,700&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- title -->
	<!--<h1>
		NEMAapp
	</h1>-->
	<!-- //title -->

	<!-- content -->
	<div class="container-agille">
		<div class="formBox level-login">
			<div class="box boxShaddow"></div>
			<div class="box loginBox">
				<h3>Inico de Sesión</h3>
				<form class="form" action="checklogin.php" method="post">
					<div class="f_row-2">
						<input type="text" class="input-field" placeholder="Usuario" name="username" id="username" required>
					</div>
					<div class="f_row-2 last">
						<input type="password" name="pass" id="pass" placeholder="Contraseña" class="input-field" required>
					</div>
					<input class="submit-w3" type="submit" value="Login">
					<div class="f_link">
						<span class="txt1">
							O entrar con
						</span>
					</div>
					<div class="f_social">
						<a href="#" class="login100-social-item">
							<i class="fa fa-facebook-f"></i>
						</a>

						<a href="#" class="login100-social-item">
							<img src="images/icons/icon-google.png" alt="GOOGLE">
						</a>
					</div>


					<div class="f_link">
						<a href="" class="resetTag">Olvidastes tu contraseña?</a>
					</div>
				</form>
			</div>
			<div class="box forgetbox agile">
				<a href="#" class="back icon-back">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 199.404 199.404" style="enable-background:new 0 0 199.404 199.404;" xml:space="preserve">
						<polygon points="199.404,81.529 74.742,81.529 127.987,28.285 99.701,0 0,99.702 99.701,199.404 127.987,171.119 74.742,117.876 
			  199.404,117.876 " />
					</svg>
				</a>
				<h3>Enviar contraseña</h3>
				<form class="form" action="envioContrasena.php" method="post">
					<p>Proporciona tu correo electronico y te enviaremos la contraseña.</p>
					<div class="f_row last">
						<label>Enviar contraseña</label>
						<input type="email" name="envioCorreo" placeholder="Correo" class="input-field" required>
						<u></u>
					</div>

					<input class="submit-w3 btn button" type="submit" value="Enviar">
					<!--<button type="submit" class="btn button submit-w3">
						<span>Enviar</span>
					</button>-->
				</form>
			</div>
			<div class="box registerBox wthree">
				<span class="reg_bg"></span>

					
				<h3>Registrate</h3>
				<form class="form" action="proceso_registro.php" method="post">
					<div class="f_row-2">
						<input type="text" class="input-field" placeholder="Nombres..." id="nombre" name="nombre" required>
					</div>
					<div class="f_row-2">
						<input type="text" class="input-field" placeholder="Apellidos..." id="apellido" name="apellido" required>
					</div>
					<div class="f_row-2">
						<input type="text" class="input-field" placeholder="Telefono..." id="telefono" name="telefono" required>
					</div>
					<div class="f_row-2">
						<input type="text" class="input-field" placeholder="Correo..." id="email" name="email" required>
					</div>
					<div class="f_row-2">
						<input type="text" onfocus="(this.type='date')" class="input-field" placeholder="Fecha de Nacimiento..." id="fecha_nac" name="fecha_nac" required>
					</div>
					<div class="f_row-2">
						<input type="text"  class="input-field" placeholder="Ciudad..." id="ciudad" name="ciudad" required>
					</div>
					<div class="f_row-2">
						<input type="text"  class="input-field" placeholder="Municipio..." id="municipio" name="municipio" required>
					</div>
					<div class="f_row-2">
						<input type="text"  class="input-field" placeholder="Usuario..." id="username" name="username" required>
					</div>
					<div class="f_row-2 last">
						<input type="password" name="pass" placeholder="contraseña" id="pass1" class="input-field" required>
					</div>
					<div class="f_row-2 last">
						<input type="password" name="password" placeholder="Confirm contraseña" id="pass2" class="input-field" required>
					</div>
					<input class="submit-w3" type="submit" value="Register">
				</form>
			</div>
			<a href="#" class="regTag icon-add">
				<i class="fa fa-repeat" aria-hidden="true"></i>

			</a>
		</div>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer-w3ls">
		<h2>&copy; 2020 NEMAapp. All rights reserved | Design by
			<a href="http://daxosline.com/" target="_blank">DAXOS</a>
		</h2>
	</div>
	<!-- //copyright -->


	<!-- js files -->
	<!-- Jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->
	<!-- input fields js -->
	<script src="js/input-field.js"></script>
	<!-- //input fields js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("pass1").onchange = validatePassword;
			document.getElementById("pass2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("pass2").value;
			var pass1 = document.getElementById("pass1").value;
			if (pass1 != pass2)
				document.getElementById("pass2").setCustomValidity("No coincide la contraseña");
			else
				document.getElementById("pass2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<!-- //js files -->


</body>

</html>