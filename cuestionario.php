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
	header('Location: login.html');//redirige a la página de login, modifica la url a tu conveniencia
	echo "Tu sesion a expirado,
	<a href='login.php'>Inicia Sesion</a>";
	exit;
}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Cuestionario</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medical Emergency Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/stylecuestionario.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
<h1> Medical Emergency Form</h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2 class="titulos">Medical Information</h2>
			<form action="proceso_cuestionario.php" method="post">
				<div class="left-agileits-w3layouts same">
					<div class="gaps">
						<p>1. ¿Cree que tiene infección en la orina o cistitis?</p>	
						<select class="input100 form-control" id="infec_orin" name="infec_orin" required>
							<option value="" >selecciona</option>
							<option value="si" >SI</option>
                            <option value="no">NO</option>
                        </select>
					</div>
					<div class="gaps">
						<p>2. ¿Ha tenido anteriormente infección de las vías urinarias o cistitis?</p>	
						<select class="input100 form-control" id="infec_vias_orin" name="infec_vias_orin" required>
							<option value="" >selecciona</option>
							<option value="si" >SI</option>
                            <option value="no">NO</option>
                        </select>
					</div>

					<div class="gaps">
						<p>3. ¿Recientemente ha tenido ardor para orinar?</p>	
						<select class="input100 form-control" id="ardor_orin" name="ardor_orin" required>
							<option value="" >selecciona</option>
							<option value="si" >SI</option>
                            <option value="no">NO</option>
                        </select>
					</div>

					<div class="gaps">
						<p>4. ¿Recientemente ha tenido aumento en el numero de veces que va al baño a orinar?</p>	
						<select class="input100 form-control" id="aumento_orin" name="aumento_orin" required>
							<option value="" >selecciona</option>
							<option value="si" >SI</option>
                            <option value="no">NO</option>
                        </select>
					</div>

					<div class="gaps">
						<p>5. ¿Recientemente ha tenido la sensación de no vaciar completo la vejiga después
								de terminar de orinar?</p>	
						<select class="input100 form-control" id="sencion_novaciar_vejiga" name="sencion_novaciar_vejiga" required>
							<option value="" >selecciona</option>
							<option value="si" >SI</option>
                            <option value="no">NO</option>
                        </select>
					</div>

					<div class="gaps">
						<p>6. ¿Recientemente ha tenido la sensación imperiosa o urgente de tener que ir a
							orinar?</p>	
							<select class="input100 form-control" id="sencion_urge_orin" name="sencion_urge_orin" required>
							<option value="" >selecciona</option>
							<option value="si" >SI</option>
                            <option value="no">NO</option>
                        </select>
					</div>
	

				</div><!-------------------------------------columna derecha-->


				<div class="right-agileinfo same">

					<div class="gaps">
						<p>7. ¿Recientemente ha tenido la sensación de dolor a nivel pélvico o abdominal
						bajo?</p>	
						<select class="input100 form-control" id="sencion_dolor_pelvico" name="sencion_dolor_pelvico" required>
							<option value="" >selecciona</option>
							<option value="si" >SI</option>
                            <option value="no">NO</option>
                        </select>
					</div>

					<div class="gaps">
						<p>8. ¿Recientemente ha tenido sangrado en la orina?</p>	
						<select class="input100 form-control" id="sangra_orin" name="sangra_orin" required>
							<option value="" >selecciona</option>
							<option value="si" >SI</option>
                            <option value="no">NO</option>
                        </select>
					</div>

					<div class="gaps">
						<p>9. ¿Recientemente ha necesitado levantarse a orinar mas de lo habitual?</p>
						<select class="input100 form-control" id="levantar_orin" name="levantar_orin" required>
							<option value="" >selecciona</option>
							<option value="si" >SI</option>
                            <option value="no">NO</option>
                        </select>
					</div>

					<div class="gaps">
						<p>10. ¿ Recientemente ha tenido flujo vaginal?</p>
						<select class="input100 form-control" id="flujo_vaginal" name="flujo_vaginal" required>
							<option value="" >selecciona</option>
							<option value="si" >SI</option>
                            <option value="no">NO</option>
                        </select>
					</div>

					<div id="flujo_vaginal_color_olor">
						<!--  -->
					</div>

					<div class="gaps">
						<p>11. ¿Recientemente ha tenido la sensación de dolor en la espalda?</p>
						<select class="input100 form-control" id="dolor_espalda" name="dolor_espalda" required>
							<option value="" >selecciona</option>
							<option value="si" >SI</option>
                            <option value="no">NO</option>
                        </select>
					</div>

					<div id="dolor_espalda_dos_semanas">
						<!--  -->
					</div>

					<div class="gaps">
						<p>12. ¿Recientemente ha tenido la sensación de aumento de temperatura o fiebre?</p>
						<select class="input100 form-control" id="sensacion_fiebre" name="sensacion_fiebre" required>
							<option value="" >selecciona</option>
							<option value="si" >SI</option>
                            <option value="no">NO</option>
                        </select>
					</div>

				</div>
				<div class="clear"></div>
				<input type="submit" value="Submit">
			</form>
		</div>
   </div>
   <!--copyright-->
			<div class="copy w3ls">
		       <p>&copy; 2017. Medical Emergency Form . All Rights Reserved  | Design by <a href="http://daxos.com/" target="_blank">Daxos</a> </p>
	        </div>
		<!--//copyright-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });

						  $(document).ready(function(){
							});
							$("select[name=flujo_vaginal]").change(function(){
									//alert("en hubo recuperacion");
									var opcion = $('select[name=flujo_vaginal]').val();
									if(opcion == "si"){
										//alert("en flujo");
										$( "#flujo_vaginal_color_olor").append(
											`
											<div class="gaps flujo_vaginal_color_olor">
												<p>A. ¿ De que color es el flujo vaginal?</p>
												<input class="input100" type="text" name="color_flujo_vaginal" id="color_flujo_vaginal" placeholder="específica el color..." required>
											</div>

											<div class="gaps flujo_vaginal_color_olor">
												<p>B. ¿ Cual es el olor del flujo vaginal?</p>
												<input class="input100" type="text" name="olor_flujo_vaginal" id="olor_flujo_vaginal" placeholder="específica el olor..." required>
											</div>
											`);
									}else{
										//remover objetos del DOM
										$("div.flujo_vaginal_color_olor").remove(); 
									}
							});
							
							$("select[name=dolor_espalda]").change(function(){
									//alert("en hubo recuperacion");
									var opcion = $('select[name=dolor_espalda]').val();
									if(opcion == "si"){
										//alert("dolor de espalda");
										$( "#dolor_espalda_dos_semanas").append(
											`
											<div class="gaps dolor_espalda">
												<p>A. En las ultimas dos semanas ha tenido los siquientes síntomas: </p><br/>
												<ul type="square"> 
													<li>✓ ¿Ha tenido ardor para orinar?</li> 
													<li>✓ ¿Ha tenido aumento en el numero de veces que va al baño a orinar?</li> 
													<li>✓ ¿Ha tenido la sensación de no vaciar completo la vejiga después de terminar de orinar?</li> 
													<li>✓ ¿Ha tenido la sensación imperiosa o urgente de tener que ir a orinar?</li> 
													<li>✓ ¿Ha tenido la sensación de dolor a nivel pélvico o abdominal bajo?</li>
													<li>✓ ¿Ha necesitado levantarse a orinar mas de lo habitual?</li>
												</ul><br/>
												<select class="input100 form-control" id="ulti_semanas_dolor_espalda" name="ulti_semanas_dolor_espalda" required>
													<option value="" >selecciona</option>
													<option value="si" >SI</option>
													<option value="no">NO</option>
												</select>

											</div>

											`);
									}else{
										//remover objetos del DOM
										$("div.dolor_espalda").remove(); 
									}
							});

				  </script>
			<!-- //Calendar -->

</body>
</html>