<?php
    include_once('utilidades.php');
    include_once('conexion.php');

    $username = $_POST['username'];
    $password = $_POST['pass'];

    //$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
    $con = new oRG_BDConector('localhost','root','','nema');
    //$con = new oRG_BDConector('localhost','root','','nema');
    $con->oConectar();
    $sql = $con->oEjecutar("SELECT id,nombres, apellidos,nom_usuario,contrasena,tipo_usuario FROM usuario WHERE nom_usuario = '{$username}'");
    $count = 0;       
    while($row = $con->oDatosObjeto($sql)){
        //debug($row);WHERE nom_usuario = '$username '
        //var_dump($row);
        $count++;
        $result = $row;
    }
    echo $result->id;
    echo $result->nom_usuario;
    echo $result->tipo_usuario;
    


if ($password==base64_decode($result->contrasena)) { 
echo "voy bien";
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $result->nom_usuario;
    $_SESSION['name'] = $result->nombres;
    $_SESSION['apellido'] = $result->apellidos;
    $_SESSION['userid'] = $result->id;
    $_SESSION['tipo_usuario'] = $result->tipo_usuario;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['name']." ".$_SESSION['name']." ".$_SESSION['apellido'];
    echo "<a href=index.php><button type='submit' class='btn btn-success'>Inicio</button></a>";
    echo "<a href=logout.php><button type='submit' class='btn btn-success'> Cerrar Sesion</button></a>";
    
    if(isset($_SESSION['tipo_usuario']) && !empty($_SESSION['tipo_usuario']) && $_SESSION['tipo_usuario']==='Usu'){     
        header('Location: index.php');//redirecciona a la pagina del usuario
    }elseif(isset($_SESSION['tipo_usuario']) && !empty($_SESSION['tipo_usuario']) && ($_SESSION['tipo_usuario']==='Admin' || $_SESSION['tipo_usuario']==='Medico')){
        header('Location: panel_admin.php');
    }

 } else { 
    $_SESSION['loggedin'] = false;
   echo "Username o Password estan incorrectos.";
   echo "<br><a href='login.php'>Volver a Intentarlo</a>";
   header('Location: error401.php');
 }




?>