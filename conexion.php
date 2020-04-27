<?php
    //CREAMOS LA CLASE
    class oRG_BDConector{
    //ATRIBUTOS
    var $servidor;
    var $usuario;
    var $password;
    var $bd;
    var $consulta;
    var $enlace;
    var $resultado;
    var $error;

        //CONSTRUCTOR
        function oRG_BDConector($ser,$usu,$pass,$base){
            $this->servidor=$ser;
            $this->usuario=$usu;
            $this->password=$pass;
            $this->bd=$base;
        }
        //METODO CONECTAR CON LA BASE DE DATOS
        function oConectar(){
            $this->enlace=mysqli_connect($this->servidor,$this->usuario,$this->password);
            mysqli_select_db($this->enlace,$this->bd)or die("La conexion a la base de datos fallo: ". mysqli_connect_error());
            
            if (mysqli_connect_errno()) {
			    printf("Conexion fallida: %s\n", mysqli_connect_error());
			    exit();
            } else {
                return $this->enlace;
            }
                return $this->enlace;
        }
        //METODO PARA EJECUTAR UNA SENTENCIA
        function oEjecutar($query){
              $this->consulta=mysqli_query($this->enlace,$query) or die('Error en la consulta'.mysqli_error());
              return $this->consulta;
        }
        //METODO PARA RECUPERAR EL ULTIMO ID INSERTADO EN LA TABLA
        function oUltimo(){
            //se utiliza despues que se haga un un insert into
              return mysqli_insert_id($this->enlace);//mysqli_insert_id devuelve directamente el identificador de la última inserción
        }
        //METODO QUE CALCULA EL NUMERO DE FILAS EN LA TABLA
        function oNumreg(){
              $this->total=mysqli_num_rows($this->consulta);
              return $this->total;
         }
        //METODO QUE EXTRAE EN UN ARREGLO
        function oDatosArray($consulta=NULL){
              if($consulta) $this->consulta=$consulta;
              $this->resultado=mysqli_fetch_array($this->consulta);
              return $this->resultado;
        }
        //METODO QUE EXTRAE EN UN ARREGLO ASOCIATIVO A LOS CAMPOS DE LA TABLA
        function oDatosAsociativo($consulta=NULL){
              if($consulta) $this->consulta=$consulta;
              $this->resultado=mysqli_fetch_assoc($this->consulta);
              return $this->resultado;
        }
        //METODO QUE EXTRAE EN UN OBJETOS
        function oDatosObjeto($consulta=NULL){
              if($consulta) $this->consulta=$consulta;
              $this->resultado=mysqli_fetch_object($this->consulta);
              return $this->resultado;
        }
        //OTROS METODOS QUE NOS PUEDEN SERVIR A FUTURO
        public function oLimpiaconsulta(){
            //mysql_free_result Libera la memoria del Resultado con con select
            mysqli_free_result($this->consulta);
        }
        public function oCerrarconexion(){
            mysqli_close($this->enlace); //cerrar la conexión con la bd
        }
    }
    //INSTANCIAMOS LA CLASE, PRIMERO CREAMOS EL OBJETO
    /*$con = new oRG_BDConector('localhost','root','','php4');
    $con->oConectar(); //INVOCAMOS EL METODO A USAR
    $sql=$con->oEjecutar("SELECT * FROM cliente");
    //echo $con->oNumreg();

    while($row=mysqli_fetch_array($sql)){
        echo $row[0]." ".$row[1]."<br>";  //se imprime todas las filas extraidas de la de base de datos
    }
    $con->oLimpiaconsulta();
    $con->oCerrarconexion();*/
?>