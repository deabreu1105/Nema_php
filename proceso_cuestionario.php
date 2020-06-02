<?php

    include_once('conexion.php');
    include_once('utilidades.php');

    var_dump($_SESSION['loggedin']); 
    var_dump($_SESSION['userid']);
    var_dump($_SESSION['username']);
    $padecimiento ="";
    $nombreUsuario = $_SESSION['name'];
    
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $idusuario = $_SESSION['userid']; 
    $infec_orin = $_POST['infec_orin']; //1
    $infec_vias_orin = $_POST['infec_vias_orin']; //2
    $ardor_orin = $_POST['ardor_orin']; //3
    $aumento_orin = $_POST['aumento_orin']; //4
    $sencion_novaciar_vejiga = $_POST['sencion_novaciar_vejiga']; //5
    $sencion_urge_orin = $_POST['sencion_urge_orin']; //6
    $sencion_dolor_pelvico = $_POST['sencion_dolor_pelvico']; //7
    $sangra_orin = $_POST['sangra_orin']; //8
    $levantar_orin = $_POST['levantar_orin']; //9
   
    $flujo_vaginal = $_POST['flujo_vaginal']; //10
    $color_flujo_vaginal = isset( $_POST['color_flujo_vaginal'] ) ? $_POST['color_flujo_vaginal'] : '';
    $olor_flujo_vaginal = isset( $_POST['olor_flujo_vaginal'] ) ? $_POST['olor_flujo_vaginal'] : '';
 
   
    $dolor_espalda = $_POST['dolor_espalda']; //11
    $ulti_semanas_dolor_espalda = isset( $_POST['ulti_semanas_dolor_espalda'] ) ? $_POST['ulti_semanas_dolor_espalda'] : '';
   
    $sensacion_fiebre = $_POST['sensacion_fiebre']; //12
    
    $fechaRegistro = date('Y/m/j');
    $con = new oRG_BDConector('localhost','root','','nema');
    $con->oConectar();
    

    /*Para cistitis aplican 1, 2, 3, 4, 5, 6, 7, 9 y 12.
    Para infección urinaria alta o renal  aplican 1, 2, 11 y 12 */
//infección vaginal y/o Pélvica ginecológica. 
//dolor lumbar y fiebre se sospecha infección alta
//si todas las demás preguntas son positivas menos la de dolor lumbar es infección baja o cistitis 
 
    //Validaciones de acuerdo a las preguntas Para el padecimiento
    if($infec_orin =="si" && $infec_vias_orin =="si" && $ardor_orin =="si" && $aumento_orin =="si" && $sencion_novaciar_vejiga  =="si" && $sencion_urge_orin =="si" && $sencion_dolor_pelvico  =="si" && $levantar_orin == "si" && $sensacion_fiebre =="si"){
        $padecimiento="Cistitis";
        if($flujo_vaginal == "si"){    
            $padecimiento = $padecimiento.", hay que descartar infección vaginal y/o Pélvica ginecológica"; 
        }else{
            $padecimiento = "No presenta ninguna afección";
        }   
    }

    

    if($infec_orin =="si" && $infec_vias_orin =="si" && $dolor_espalda =="si" && $sensacion_fiebre =="si"){
        $padecimiento = "Infección urinaria alta o renal";
        if($dolor_espalda == "si"){    
            $padecimiento =$padecimiento.", padeciste infección baja (cistitis)"; 
        }else{
            $padecimiento = "No presenta ninguna afección";
        }  
    }

    var_dump($padecimiento);
    $insertaCuestionario=$con->oEjecutar("INSERT INTO cuestionario(id_usuario,infec_orina,infec_uri_cistitis,ardor_orinar_disuria,aumento_orina_polaquiuria,sencion_novaciar_vejiga,sencion_urge_orin,sencion_dolor_pelvico,sangra_orin,levantar_orin,flujo_vaginal,color_flujo_vaginal,olor_flujo_vaginal,dolor_espalda,ulti_semanas_dolor_espalda,sensacion_fiebre,padecimiento)
    VALUES('{$idusuario}','{$infec_orin}','{$infec_vias_orin}','{$ardor_orin}','{$aumento_orin}',
           '{$sencion_novaciar_vejiga}','{$sencion_urge_orin}','{$sencion_dolor_pelvico}','{$sangra_orin}',
           '{$levantar_orin}','{$flujo_vaginal}','{$color_flujo_vaginal}','{$olor_flujo_vaginal}',
           '{$dolor_espalda}','{$ulti_semanas_dolor_espalda}','{$sensacion_fiebre}','{$padecimiento}'  )");
    var_dump($insertaCuestionario);
   
    if ($insertaCuestionario === TRUE) {
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
        $from = "usuario@dominio.com";
        $to = "juanf.romerog@gmail.com";
        $subject = "Resultados del proceso indagatorio";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $message = '
        <html>
            <head>
                <title>Proceso indagatorio</title>
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
                <h2>Proceso indagatorio NEMA app</h2>
                <p>'.$saludo.' '.$nombreUsuario.' tienes '.$padecimiento.' </p>
            </body>
        </html>';
        mail($to, $subject, $message, $headers); //Función de envio de correo
    
        
        //header('Location: index.php');
        echo "<br />" . "<h1>" . "Gracias por registrarse!" . "</h1>";
        echo "<h3>" . "Bienvenido: " .$_SESSION['username']. "</h3>" . "\n\n";
        echo "<h3>" . "Iniciar Sesion: " . "<a href='login.html'>Login</a>" . "</h3>"; 
    }else{
        //echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
    }

}
   ?>