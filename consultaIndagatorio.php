<?php
include_once('utilidades.php');
include_once('conexion.php');
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $idget = $_GET['id'];
  $nombresGet = $_GET['nombre'];
  $apellidosGet = $_GET['apellido'];
  $foto = $_GET['foto'];

  var_dump($_GET['id']);

  var_dump($_SESSION['loggedin']); 
  var_dump($_SESSION['userid']);
  var_dump($_SESSION['username']);
  var_dump($_SESSION['tipo_usuario']);
  var_dump($_SESSION['name']);
  var_dump($_SESSION['apellido']);
  
 

 
} else {
  header('Location:error401.php');
  exit;
}
$now = time();
if($now > $_SESSION['expire']) {
  session_destroy();
  header('Location: login.php');//redirige a la página de login
  echo "Tu sesion a expirado,
  <a href='login.php'>Inicia Sesion</a>";
  exit;
}

//////////////////////////////////////////////////////////////////////////////
    
    //$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
    $con = new oRG_BDConector('localhost','root','','nema');
    $con->oConectar();
    $consultaCuestionario = $con->oEjecutar("SELECT * FROM cuestionario WHERE id_usuario = '{$idget}' ");
    $count = 0;       
    while($row = $con->oDatosObjeto($consultaCuestionario)){
        //debug($row);WHERE nom_usuario = '$username '
        //var_dump($row);
        $count++;
        $result = $row;
    }

   

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V9</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap3.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.bootgrid2.css" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<!-- CSS Files -->
	<script src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap2.min.js"></script>
	<script src="js/jquery.bootgrid2.min.js"></script>

<style>
.wrap-login100 {
    width: 90%;
}
.container-image{
  display: block;
  margin: 10px 0 0 0;
  max-width: 100%;
  width: 20%;

}
.table-img { width: 10%px; }

.container-image {
    display: initial;
    margin: 10px 0 0 0;
    max-width: 100%;
    width: 20%;
}

.table-img {
    /* FONT-WEIGHT: 100; */
    float: right;
    position: relative;
    width: 10%;
    /* height: 100px; */
    /* border-radius: 50%; */
}
</style>


</head>

<?php 
    if(isset($_SESSION['tipo_usuario']) && !empty($_SESSION['tipo_usuario']) && ($_SESSION['tipo_usuario'] ==='Admin' || $_SESSION['tipo_usuario'] ==='Medico')){     
?>
<body>
    <div class="container-login100" style="background-image: url('images/Digital-Technology.jpg');">
	    <div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-50 tim-row">

        <img  class="container-image" src="images/Nemaico.png" alt="Ejemplo">
        <?php echo $foto;?>

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h2 class="modal-title">Respuestas del proceso indagatorio de <?php echo $nombresGet." ".$apellidosGet ?></h2>
        </div>
  
        <div class="modal-body">
            <h3>1. ¿Cree que tiene infección en la orina o cistitis?</h3>
            <p><?php echo isset( $result->infec_orina ) ? $result->infec_orina : ''; ?></p>
            <h3>2. ¿Ha tenido anteriormente infección de las vías urinarias o cistitis?</h3>
            <p><?php echo isset($result->infec_uri_cistitis) ? $result->infec_uri_cistitis : ''; ?></p>
            <h3>3. ¿Recientemente ha tenido ardor para orinar?</h3>
            <p><?php echo isset($result->ardor_orinar_disuria) ? $result->ardor_orinar_disuria : ''; ?></p>
            <h3>4. ¿Recientemente ha tenido aumento en el numero de veces que va al baño a orinar?</h3>
            <p><?php echo isset($result->aumento_orina_polaquiuria) ? $result->aumento_orina_polaquiuria : ''; ?></p>
            <h3>5. ¿Recientemente ha tenido la sensación de no vaciar completo la vejiga después de terminar de orinar?</h3>
            <p><?php echo isset($result->sencion_novaciar_vejiga) ? $result->sencion_novaciar_vejiga : ''; ?></p>
            <h3>6. ¿Recientemente ha tenido la sensación imperiosa o urgente de tener que ir a orinar?</h3>
            <p><?php echo isset($result->sencion_urge_orin) ? $result->sencion_urge_orin : ''; ?></p>
            <h3>7. ¿Recientemente ha tenido la sensación de dolor a nivel pélvico o abdominal bajo?</h3>
            <p><?php echo isset($result->sencion_dolor_pelvico) ? $result->sencion_dolor_pelvico : ''; ?></p>
            <h3>8. ¿Recientemente ha tenido sangrado en la orina?</h3>
            <p><?php echo isset($result->sangra_orin) ? $result->sangra_orin : ''; ?></p>
            <h3>9. ¿Recientemente ha necesitado levantarse a orinar mas de lo habitual?</h3>
            <p><?php echo isset($result->levantar_orin) ? $result->levantar_orin : ''; ?></p>
            <h3>10. ¿ Recientemente ha tenido flujo vaginal?</h3>
            <p><?php echo isset($result->flujo_vaginal) ? $result->flujo_vaginal : ''; ?></p>
            <h3>A. ¿ De que color es el flujo vaginal?</h3>
            <p><?php echo isset($result->color_flujo_vaginal) ? $result->color_flujo_vaginal : ''; ?></p>
            <h3>B. ¿ Cual es el olor del flujo vaginal?</h3>
            <p><?php echo isset($result->olor_flujo_vaginal) ? $result->olor_flujo_vaginal : ''; ?></p>
            <h3>11. ¿Recientemente ha tenido la sensación de dolor en la espalda?</h3>
            <p><?php echo isset($result->dolor_espalda) ? $result->dolor_espalda : ''; ?></p>
            <h3>A. ¿En las ultimas dos semanas ha tenido los anteriores síntomas dado que las infecciones altas se preceden generalmente de síntomas bajos e infección baja?</h3>
            <p><?php echo isset($result->ulti_semanas_dolor_espalda) ? $result->ulti_semanas_dolor_espalda : ''; ?></p>
            <h3>12. ¿Recientemente ha tenido la sensación de aumento de temperatura o fiebre?</h3>
            <p><?php echo isset($result->sensacion_fiebre) ? $result->sensacion_fiebre : ''; ?></p>
            <h2><?php echo isset($result->padecimiento) ? "Resultado: ".$result->padecimiento : "Resultado: ".' No ha llenado el cuestionario'; ?></h2>
            
        </div>
       
        <a href=logout.php><button type='button' class='btn btn-success'>Cerrar Sesion</button></a>
        <a href="javascript:cerrar();">Cerrar</a>
    </div>

</body>

  <?php }else{
        require_once('error401.php');
        //echo 'usuario incorrecto aqui va el mensaje de pagina no accesible no eres inv Admin';
      }
  ?>

<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script>
    function cerrar() { 
        window.open('','_parent',''); 
        window.close(); 
    } 
	$(document).ready(function(){ 
        
	});
	</script>


</html>