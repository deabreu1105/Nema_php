
 <?php
 //incluimos el archivo donde se encuentran nuestros datos de conexion
 //include_once('utilidades.php');
 include_once('conexion.php');

 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $telefono = $_POST['telefono'];
 $fecha_nac = $_POST['fecha_nac'];
 $municipio = $_POST['municipio'];
 $ciudad = $_POST['ciudad'];
 $email = $_POST['email'];
 $username = $_POST['username'];
 $pass = $_POST['pass'];
 $fechaRegistro = date('Y/m/j');
 $fecha = date('Ymj');
 $horaActual = date('His');

 $contraEncript = base64_encode($pass = $_POST['pass']);
 $contraDesencript = base64_decode($contraEncript);
 var_dump($contraEncript);
 var_dump($contraDesencript);

//$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
$con = new oRG_BDConector('localhost','root','','nema');
$con->oConectar();
$buscaUsuario = $con->oEjecutar("SELECT * FROM usuario WHERE nom_usuario = '$username '");
$count = 0;

while($row = $con->oDatosObjeto($buscaUsuario)){
    //debug($row);
    //var_dump($row);
    $count++;
    $result = $row;
}

$cant_registro =  $con->oNumreg();
//$con->oLimpiaconsulta();
//$con->oCerrarconexion();


if ($cant_registro == 1) {
    echo "<br />". "Nombre de Usuario ya asignado, ingresa otro." . "<br />";
    echo "<a href='login.php'>Por favor escoga otro Nombre</a>";
}else{

   
    echo "aqui se inserta el registro";
    $insertaUsuario=$con->oEjecutar("INSERT INTO usuario(nombres,apellidos,telefono,email,fecha_nac,ciudad,municipio,tipo_usuario,nom_usuario,contrasena,estado_usu,fecha_creacion,fecha_modificacion)
        VALUES('{$nombre}','{$apellido}','{$telefono}','{$email}','{$fecha_nac}','{$municipio}','{$ciudad}','Usu','{$username}','{$contraEncript}','A','{$fechaRegistro}','')");
    var_dump($insertaUsuario);
    if ($insertaUsuario === TRUE) {
 
    header('Location: login.php');
    echo "<br />" . "<h1>" . "Gracias por registrarse!" . "</h1>";
    echo "<h3>" . "Bienvenido: " . $_POST['username'] . "</h3>" . "\n\n";
    echo "<h3>" . "Iniciar Sesion: " . "<a href='login.html'>Login</a>" . "</h3>"; 
    }
   
    else {
    //echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
      }

}

?>