<?php
include_once('utilidades.php');

/*if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	
	
var_dump($_SESSION['loggedin']); 
var_dump($_SESSION['userid']);
var_dump($_SESSION['username']);

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
}*/
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


<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap3.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.bootgrid2.css" />
<!--===============================================================================================-->

<script src="vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap2.min.js"></script>
	<script src="js/jquery.bootgrid2.min.js"></script>


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
					<li><a href="#preguntas" class="scroll"></a><span> </span></li>
					<li><a href="#servicios" class="scroll"></a><span> </span></li>
					<li><a href="#contact" class="scroll"></a><span> </span></li>
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
	
	<!--start-feature-->
	<div class="feature" id="QueEsNema">
		<div class="container">
			<div class="feature-main">
	
			<div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-50 tim-row">
    
			<div class="container-login100-form-btn">
      
				<!--<button  class="login100-form-btn" type="submit">¿Que es NEMA app?</button>-->
				<h2>Tabla Administración de Usuarios</h2>
			</div>
      
			<div class="well clearfix">
        <div class="pull-right">
            <button type="button" class="btn btn-xs btn-primary" id="command-add" data-row-id="0">
              <span class="glyphicon glyphicon-plus"></span> Agregar
            </button>
        </div>
      </div>

			<div class="table-responsive">
				<table id="grid-data" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
					<thead>
						<tr>
							<th data-column-id="id" data-type="numeric" data-identifier="true">ID</th>
							<th data-column-id="email">Correo</th>
							<th data-column-id="nombres">Nombres</th>
							<th data-column-id="apellidos">Apellidos</th>
							<th data-column-id="tipo_usuario">Tipo</th>
              <th data-column-id="estado_usu">Estado</th> 
              <th data-column-id="foto" data-formatter="image" data-sortable="false">Foto</th>         
							<th class="td-actions text-right" data-column-id="commands" data-formatter="commands" data-sortable="false">Accion</th>
						</tr>
					</thead>
				</table>
			</div>


		</div>
	</div>
	
<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	  <div class="modal-content">
	    <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	    </div>
	    <div class="modal-body">
		    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
	    </div>
	    <div class="modal-footer">
		    <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
		    <button type="button" class="btn btn-info btn-simple">Save</button>
	    </div>
	  </div>
  </div>
</div>

<!--Modal para agregar bootstrap-->
<div id="add_model" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Agregar usuario</h4>
      </div>
      <form role="form" method="post" id="frm_add">
        <div class="modal-body">
          <input type="hidden" value="add" name="action" id="action">

          <div class="form-group">
            <label for="nombres" class="control-label">Nombres:</label>
            <input type="text" class="form-control" id="nombres" name="nombres" require/>
          </div>
          <div class="form-group">
            <label for="apellidos" class="control-label">Apellidos:</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos"/>
          </div>
          <div class="form-group">
            <label for="email" class="control-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email"/>
          </div>

          <div class="form-group">
            <label for="nombreUsuario" class="control-label">Nombre de usuario:</label>
            <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario"/>
          </div>

          <div class="form-group">
            <label for="tipoUsuario" class="control-label">Tipo usuario:</label>
            <input type="text" class="form-control" id="tipoUsuario" name="tipoUsuario"/>
          </div>
   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" id="btn_add" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

    <!--Modal para editar bootstrap-->  
    <div id="edit_model" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Editar usuario</h4>
                </div>
                <div class="modal-body">
                    <form method="post" id="frm_edit">
                    <input type="hidden" value="edit" name="action" id="action">
                    <input type="hidden" value="0" name="edit_id" id="edit_id">
                    <div class="form-group">
                        <label for="edit_email" class="control-label">Correo:</label>
                        <input type="email" class="form-control" id="edit_email" name="edit_email"/>
                      </div>
                      <div class="form-group">
                        <label for="edit_nombres" class="control-label">Nombres:</label>
                        <input type="text" class="form-control" id="edit_nombres" name="edit_nombres"/>
                      </div>
                      <div class="form-group">
                        <label for="edit_apellidos" class="control-label">Apellidos:</label>
                        <input type="text" class="form-control" id="edit_apellidos" name="edit_apellidos"/>
                      </div>
                      <div class="form-group">
                        <label for="edit_tipo" class="control-label">Tipo:</label>
                        <input type="text" class="form-control" id="edit_tipo" name="edit_tipo"/>
                        <div class="form-group">
                        <label for="edit_estado" class="control-label">Estado:</label>
                        <input type="text" class="form-control" id="edit_estado" name="edit_estado"/>
                      </div>
                      </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="btn_edit" class="btn btn-primary">Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!--Modal para consulta proceso indagatorio-->  
    <div id="indagatorio_model" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Respuestas del proceso indagatorio</h4>
          </div>
          <div class="modal-body">
            <h3>1. ¿Cree que tiene infección en la orina o cistitis?</h3>
            <p></p>
            <h3>2. ¿Ha tenido anteriormente infección de las vías urinarias o cistitis?</h3>
            <p></p>
            <h3>3. ¿Recientemente ha tenido ardor para orinar?</h3>
            <p></p>
            <h3>4. ¿Recientemente ha tenido aumento en el numero de veces que va al baño a orinar?</h3>
            <p></p>
            <h3>5. ¿Recientemente ha tenido la sensación de no vaciar completo la vejiga después de terminar de orinar?</h3>
            <p></p>
            <h3>6. ¿Recientemente ha tenido la sensación imperiosa o urgente de tener que ir a orinar?</h3>
            <p></p>
            <h3>7. ¿Recientemente ha tenido la sensación de dolor a nivel pélvico o abdominal bajo?</h3>
            <p></p>
            <h3>8. ¿Recientemente ha tenido sangrado en la orina?</h3>
            <p></p>
            <h3>9. ¿Recientemente ha necesitado levantarse a orinar mas de lo habitual?</h3>
            <p></p>
            <h3>10. ¿ Recientemente ha tenido flujo vaginal?</h3>
            <p></p>
            <h3>A. ¿ De que color es el flujo vaginal?</h3>
            <p></p>
            <h3>B. ¿ Cual es el olor del flujo vaginal?</h3>
            <p></p>
            <h3>11. ¿Recientemente ha tenido la sensación de dolor en la espalda?</h3>
            <p></p>
            <h3>A. ¿En las ultimas dos semanas ha tenido los anteriores síntomas dado que las infecciones altas se preceden generalmente de síntomas bajos e infección baja?</h3>
            <p></p>
            <h3>12. ¿Recientemente ha tenido la sensación de aumento de temperatura o fiebre?</h3>
            <p></p>
            <h3>Resultado</h3>
            <p></p>

            <form method="post" id="frm_indagatorio">
              <input type="hidden" value="indagatorio" name="action" id="action">
              <input type="hidden" value="" name="indagatorio_id" id="indagatorioa_id" required>
              <div class="form-group">
                <label for="justificacion" class="control-label">Justificación:</label>
                <textarea class="form-control"  name="justificacion" rows="3" ></textarea>
              </div>
              <div class="form-group">
                <label for="fechaProrroga" class="control-label">Fecha de prorroga:</label>
                <input type="date" name="fechaProrroga" id="fechaProrroga">
            </div>         
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" id="btn_indagatorio" class="btn btn-primary" >Guardar</button>
            </div>
            </form>
          </div>
        </div>
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

	<!--start-footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p>Diseñado por<a href="http://w3layouts.com/"> DAXOS</a></p>
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



<script>

    var header_height;
    var fixed_section;
    var floating = false;
          
		$(document).ready(function(){ 

      var tipoUsuario = "<?php echo($_SESSION['tipo_usuario']);?>";

    
			//El método Bootgrid convierte la tabla HTML en una lista de cuadrícula hermosa.
            var grid = $("#grid-data").bootgrid({
                labels: {
                  noResults: "No hay resultados que mostrar"
                },
                ajax: true,
                rowSelect: true,
                post: function (){
                    /*Para acumular parámetro personalizado con el objeto de solicitud */
                    return {
                        id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
                    };
                },
                url: "response_panel_admin.php",   
                formatters: {
                    "image": function (column, row) {
                      //return "<img src=\"Student/getPhoto/" + row.StudentId + "\" />";
                      var botonesGerencial;
                        if(row.foto == ''){
                          return "<img class='table-img' src='images/userPredeterminado.png' />";
                        }else{
                          return "<img class='table-img' src='" + row.foto + "' />";
                        }
                    },
                    "commands": function(column, row){
                      var botonesMedico = "<button type=\"button\" rel=\"tooltip\" title=\"indagatorio\"       class=\"btn btn-danger btn-simple btn-x command-indagatorio\" data-row-id=\"" + row.id + "\"><span class=\"fa fa-times\"></span></button>";
                      var botonesAdmin = "<button type=\"button\" rel=\"tooltip\" title=\"Editar registro\"   class=\"btn btn-danger btn-simple btn-x command-edit\" data-row-id=\"" + row.id + "\"><span class=\"fa fa-edit\"></span></button> "+ 
                                        "<button type=\"button\" rel=\"tooltip\" title=\"Eliminar registro\" class=\"btn btn-danger btn-simple btn-x command-delete\" data-row-id=\"" + row.id + "\"><span class=\"fa fa-times\"></span></button> ";
                      
                      /*if(tipoUsuario == 'Admin'){
                        return botonesAdmin;
                      }*/
                      
                       // return "<button type=\"button\" rel=\"tooltip\" title=\"indagatorio\" class=\"btn btn-success btn-simple btn-x command-indagatorio\" data-row-id=\"" + row.id + "\"><span class=\"fa fa-times\"></span></button> ";
                      return "<button type=\"button\" rel=\"tooltip\" title=\"Editar registro\"   class=\"btn btn-danger btn-simple btn-x command-edit\" data-row-id=\"" + row.id + "\"><span class=\"fa fa-edit\"></span></button> "+ 
                             "<button type=\"button\" rel=\"tooltip\" title=\"Eliminar registro\" class=\"btn btn-danger btn-simple btn-x command-delete\" data-row-id=\"" + row.id + "\"><span class=\"fa fa-times\"></span></button> "+
                             "<button type=\"button\" rel=\"tooltip\" title=\"indagatorio\"       class=\"btn btn-danger btn-simple btn-x command-indagatorio\" data-row-id=\"" + row.id + "\"><span class=\"fa fa-times\"></span></button>";
                    }

                    /*"commands": function(column, row){
                        var tipoUsuario = "<?php //echo($_SESSION['tipo_usuario']);?>";
                        var botonesMedico;
                        var botonesAdmin;

                        if(tipoUsuario == 'Admin'){
                            botonesAdmin = "<button type=\"button\" rel=\"tooltip\" title=\"Editar registro\" class=\"btn btn-success btn-simple btn-xs command-edit\" data-row-id=\"" + row.id + "\"><span class=\"fa fa-edit\"></span></button> " + 
                                            "<button type=\"button\" rel=\"tooltip\" title=\"Eliminar registro\" class=\"btn btn-danger btn-simple btn-x command-delete\" data-row-id=\"" + row.id + "\"><span class=\"fa fa-times\"></span></button>";
                            
                            //botonesAdmin = "<button type=\"button\"  class=\"btn btn-xs btn-default command-cerrar\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-folder-close\"></span></button> " + "<button type=\"button\" class=\"btn btn-xs btn-default command-prorroga\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-time\"></span></button> ";
                        }else{
                            botonesMedico = "<button type=\"button\" rel=\"tooltip\" title=\"indagatorio\" class=\"btn btn-danger btn-simple btn-x command-indagatorio\" data-row-id=\"" + row.id + "\"><span class=\"fa fa-times\"></span></button> ";
                        }
                        return botonesAdmin + botonesMedico;
                       //return "<button type=\"button\" rel=\"tooltip\" title=\"Pasar a revisión\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-new-window\"></span></button> " + botonesGerencial + "<button type=\"button\" rel=\"tooltip\" title=\"Modificar\" class=\"btn btn-xs btn-default command-edit2\" data-row-id=\"" + row.id + "\"  ><span class=\"glyphicon glyphicon glyphicon-edit\" ></span></button>";
                       // "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
                    }*/
                   
               }
            }).on("loaded.rs.jquery.bootgrid", function(){         //AQUI VA EL CODIGO QUE EDITA Y ELIMINA REGISTROS DE LA TABLA
                /* Se ejecuta después de cargar y procesar los datos */
                grid.find(".command-edit").on("click", function(e){
                    //alert("You pressed edit on row: " + $(this).data("row-id"));
                    var ele =$(this).parent();  // trae el registro actual que le dio clic en editar
                    var g_id = $(this).parent().siblings(':first').html(); // es el la primera columna de la tabla id
                    var g_name = $(this).parent().siblings(':nth-of-type(2)').html(); // es el la segunda columna de la tabla nombre
                    console.log(g_id);
                    console.log(g_name);

                    //console.log(grid.data());//
                    //aqui se muestra el modal para editar
                    $('#edit_model').modal('show');
                      if($(this).data("row-id") >0) {
                         // Recoger los datos y colocarlos en cada uno de los campos del modal editar
                          //con ele.siblings(':first') obtenemos el primer elemento de la tabla
                         $('#edit_id').val(ele.siblings(':first').html()); // in case we're changing the key
                         $('#edit_email').val(ele.siblings(':nth-of-type(2)').html());
                         $('#edit_nombres').val(ele.siblings(':nth-of-type(3)').html());
                         $('#edit_apellidos').val(ele.siblings(':nth-of-type(4)').html());
                         $('#edit_tipo').val(ele.siblings(':nth-of-type(5)').html());
                         $('#edit_estado').val(ele.siblings(':nth-of-type(6)').html());
                      }else{
                         alert('Now row selected! primero seleccione la fila y luego haga clic en el botón editar');
                      }

                }).parents().find(".command-indagatorio").on("click", function(e){ 
                    //alert("llego");
                    //alert("You pressed edit on row: " + $(this).data("row-id"));
                    var ele =$(this).parent();  // trae el registro actual que le dio clic en editar
                    var g_id = $(this).parent().siblings(':first').html(); // es el la primera columna de la tabla id
                    var g_correo = $(this).parent().siblings(':nth-of-type(2)').html();
                    var g_nombres = $(this).parent().siblings(':nth-of-type(3)').html();
                    var g_apellidos = $(this).parent().siblings(':nth-of-type(4)').html();
                    var g_foto = $(this).parent().siblings(':nth-of-type(7)').html();
                    
                    /*if (tipoUsuario == 'Gerencial'){
                        var g_caso = $(this).parent().siblings(':nth-of-type(8)').html(); 
                    }else{
                        var g_caso = $(this).parent().siblings(':nth-of-type(6)').html();
                    }*/
                    // es el la segunda columna de la tabla nombre
                    console.log(g_id);
                    console.log(g_nombres);
                    //aqui se va a la pagina de consulta
                    
                    window.open('consultaIndagatorio.php?id='+g_id+'&nombre='+g_nombres+'&apellido='+g_apellidos+'&foto='+g_foto,'_blank');
                    /*if(g_caso =='Administrativo'){
                        document.location.target='_blank';
                        document.location.href="editFormAdministrativo.php?id="+g_id;
                    }else{
                        document.location.target='_blank';
                        document.location.href="editFormFinanciero.php?id="+g_id;
                    } */
                
                }).end().find(".command-delete").on("click", function(e){
                    var conf = confirm('Deseas eliminar el registro ' + $(this).data("row-id") + ' ?');
                    alert(conf);
                    if(conf){
                        //Si conf es afirmativa se lleva con el metodo post el id y la caccion delete al archivo response.php
                        $.post('response_panel_admin.php', { id: $(this).data("row-id"), action:'delete'}
                        , function(){
                            // when ajax returns (callback), 
                            //DESPUES RECARGA LA TABLA
                             $("#grid-data").bootgrid('reload');
                        }); 
                            //$(this).parent('tr').remove();
                            //$("#admin_grid").bootgrid('remove', $(this).data("row-id"))
                    }
                });



            });

            //Esta es la función que envia con el metodo POST al archivo response.php en forma to Json
            function ajaxAction(action) {
              //serializeArray() método crea una matriz de objetos (nombre y valor) serializando valores del formulario
               data = $("#frm_"+action).serializeArray();
              
               $.ajax({
                  type: "POST",  
                  url: "response_panel_admin.php",  
                  data: data,
                  dataType: "json",       
                  success: function(response_panel_admin){
                    console.log(response_panel_admin);
                      $('#'+action+'_model').modal('hide');
                      $("#grid-data").bootgrid('reload');
                  }   

                  
               });
            }
            // al hacer clic al boton command-add solo muestra el modal de agregar
            $( "#command-add" ).click(function() {
              $('#add_model').modal('show');
            });
            //estos son los botones que al darle clic mandan hacer la accion de agregar o modificar
            $( "#btn_add" ).click(function() {
              ajaxAction('add');
             
            });
            $( "#btn_edit" ).click(function() {
               ajaxAction('edit');
            });

		});
	</script>
</html>