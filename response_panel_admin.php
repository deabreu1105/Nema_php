<?php ob_start(); ?>
<?php
	//include connection file 
	include_once("connection_response.php");
	$db = new dbObj();
	$connString =  $db->getConnstring();
	$params = $_REQUEST;
	
	$action = isset($params['action']) != '' ? $params['action'] : '';
	$empCls = new Employee($connString);

	switch($action) {
	 case 'add':
		$empCls->insertarUsuario($params);
	 break;
	 case 'edit':
		$empCls->updateEmployee($params);
	 break;
	 case 'delete':
		$empCls->eliminarUsuario($params);
	 break;
	 default:
	 $empCls->getEmployees($params);
	 return;
	}
	
class Employee {
	protected $conn;
	protected $data = array();
    
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	public function getEmployees($params) {
		$this->data = $this->getRecords($params);
		echo json_encode($this->data);
	}
        
	function insertarUsuario($params) {

	//Algoritmos para hacer contraseñas automaticas
	/*if (isset($_POST['generar'])) {
		//Carácteres para la contraseña
		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$password = "";
		//Reconstruimos la contraseña segun la longitud que se quiera
		for($i=0;$i<$_POST['longitud'];$i++) {
		//obtenemos un caracter aleatorio escogido de la cadena de caracteres
		$password .= substr($str,rand(0,62),1);
		}
		//Mostramos la contraseña generada
		echo 'Password generado: '.$password;
	}*/
	

		$data = array();;
		$sql = "INSERT INTO `usuario` (nombres,apellidos,email,tipo_usuario,nom_usuario) VALUES('" . $params["nombres"] . "','" . $params["apellidos"] .  "','" . $params["email"] . "','" . $params["tipoUsuario"] . "','" . $params["nombreUsuario"] . "');  ";
		echo $result = mysqli_query($this->conn, $sql) or die("error to insert employee data");
		
	}
	
	
	function getRecords($params) {
		$rp = isset($params['rowCount']) ? $params['rowCount'] : 10;
		
		if (isset($params['current'])) { $page  = $params['current']; } else { $page=1; };  
        $start_from = ($page-1) * $rp;
		
		$sql = $sqlRec = $sqlTot = $where = '';
		
		if( !empty($params['searchPhrase']) ) {   
			$where .=" WHERE ";
			$where .=" ( email LIKE '".$params['searchPhrase']."%' ";    
			$where .=" OR nombres LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR apellidos LIKE '".$params['searchPhrase']."%' )";
	   }
	   if( !empty($params['sort']) ) {  
			$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}
	   // getting total number records without any search
		$sql = "SELECT * FROM `usuario` ";
		$sqlTot .= $sql;
		$sqlRec .= $sql;
		
		//concatenate search sql if value exist
		if(isset($where) && $where != '') {

			$sqlTot .= $where;
			$sqlRec .= $where;
		}
		if ($rp!=-1)
		$sqlRec .= " LIMIT ". $start_from .",".$rp;
		
		
		$qtot = mysqli_query($this->conn, $sqlTot) or die("error to fetch tot employees data");
		$queryRecords = mysqli_query($this->conn, $sqlRec) or die("error to fetch employees data");
		
		while( $row = mysqli_fetch_assoc($queryRecords) ) { 
			$data[] = $row;
		}

		$json_data = array(
			"current"            => intval($params['current']), 
			"rowCount"            => 10, 			
			"total"    => intval($qtot->num_rows),
			"rows"            => $data   // total data array
			);
		
		return $json_data;
	}
	function updateEmployee($params) {
		$fechaActualizacion = date('Y/m/j');
		$data = array();
		//print_R($_POST);die;

		$sql = "Update `usuario` set nombres='".$params["edit_nombres"]."',
		apellidos='".$params["edit_apellidos"]."', email='" . $params["edit_email"] . "', 
		tipo_usuario='" . $params["edit_tipo"] . "', estado_usu='" . $params["edit_estado"]. "', 
		fecha_modificacion='" . $fechaActualizacion."'WHERE id='".$_POST["edit_id"]."'  ";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to update employee data");
	}
	
	function eliminarUsuario($params) {
		$data = array();
		//print_R($_POST);die;
		$sql = "delete from `usuario` WHERE id='".$params["id"]."'";
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete employee data");
	}
}
?>
	
