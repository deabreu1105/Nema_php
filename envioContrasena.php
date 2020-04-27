<?php
    include_once('utilidades.php');
    include_once('conexion.php');

    $correo = $_POST['envioCorreo'];
    $contrasena;
    $usuario;
    //$password = $_POST['pass'];

    //$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
    $con = new oRG_BDConector('localhost','root','','nema');
    $con->oConectar();
    $sql = $con->oEjecutar("SELECT id,nombres, apellidos,nom_usuario,contrasena FROM usuario WHERE email = '{$correo}'");
    $count = 0;       
    while($row = $con->oDatosObjeto($sql)){
        //debug($row);WHERE nom_usuario = '$username '
        //var_dump($row);
        $count++;
        $result = $row;
    }
    echo $result->id;
    $usuario =  $result->nom_usuario;
    echo $result->tipo_usuario;
    $contrasena = $result->contrasena;
    


if ($password==base64_decode($result->contrasena)) { 
echo "voy bien";
   

    echo "Bienvenido! " . $_SESSION['name']." ".$_SESSION['name']." ".$_SESSION['apellido'];
    echo "<a href=index.php><button type='submit' class='btn btn-success'>Inicio</button></a>";
    echo "<a href=logout.php><button type='submit' class='btn btn-success'> Cerrar Sesion</button></a>";
    

    $hora = trim(intval(date("H")),0);
        var_dump(intval($hora));
        $hora2 = 2;
        $hora3 = 9;
        $saludo;
        if($hora < $hora2){
            $saludo = "Buenos días";
        }elseif($hora > $hora3){
            $saludo = "Buenas noches";
        }
        else{
            $saludo = "Buenas tardes";
        }

        //Envio del correo
        $from = "nema@nema.com";
        $to = $correo;
        //$to = "deabreu83@gmail.com";
        $subject = "Envio de contraseña";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $message = '
        <html>
            <head>
                <title>Envio de contraseña</title>
            </head>
            <style>
            .container-image{
                display: block;
                margin: 0 auto;
                max-width: 100%;
                width: 80%;
            }
            </style>
            <body>
                <img class="/container-image"/ src="/images/Nemaico.png"/ alt="/Ejemplo"/>
                <h2>Contraseña de NEMAapp app</h2>
                <p>'.$saludo.' '.$usuario.' esta es tu contraseña para que te entrar a la web NEMAapp '.$contrasena.' </p>
            </body>
        </html>';
        mail($to, $subject, $message, $headers);

 
 } 



?>