<?php 
	require  "../modelo/Cliente.php";
	$cliente= new Cliente();
	$codigo=isset($_POST['codigo'])?limpiarCadena($_POST['codigo']):"";
	$nombres=isset($_POST['nombres'])?limpiarCadena($_POST['nombres']):"";
	$materno=isset($_POST['materno'])?limpiarCadena($_POST['materno']):"";
	$paterno=isset($_POST['paterno'])?limpiarCadena($_POST['paterno']):"";
	$direccion=isset($_POST['direccion'])?limpiarCadena($_POST['direccion']):"";
	$telefono=isset($_POST['telefono'])?limpiarCadena($_POST['telefono']):"";
	$distrito=isset($_POST['iddistrito'])?limpiarCadena($_POST['iddistrito']):"";
	$correo=isset($_POST['correo'])?limpiarCadena($_POST['correo']):"";
	$imagen=isset($_POST['foto'])?limpiarCadena($_POST['foto']):"";


	switch ($_GET['op']) {
		case 'guardaryeditar':
		   if(!file_exists($_FILES['foto']['tmp_name']) || !is_uploaded_file($_FILES['foto']['tmp_name'])) {
     		 $imagen="";
   			 }
   		 else {
			      $ext=explode(".",$_FILES['foto']['name']);
			      if($_FILES['foto']['type']=="image/jpg" || $_FILES['foto']['type']=="image/jpeg" || $_FILES['foto']['type']=="image/png")
			      {
			        $imagen= round(microtime(true)). '.' .end($ext);
			       move_uploaded_file($_FILES["foto"]["tmp_name"], "../files/fotos/" . $imagen);
			      }
			    }
					
				if (!empty($codigo)) {
						$resultado=$cliente->insertar($codigo,$nombres,$paterno,$materno,$direccion,$telefono,$distrito,$correo,$imagen);
						echo  $resultado?"REGISTRO INSERTADO CORRECTAMENTE":"NO SE PUDO INSERTAR EL REGISTRO";

				}
			
			
			
			break;
		
		case 'eliminar':
				$resultado=$cliente->eliminar($codigo);
				echo $resultado?"Eliminado CORRECTAMENTE":"NO SE PUDO ELIMINAR";

			break;

		   case 'listar':
			    $respuesta=$cliente->listar();
			    // declaramos un array
			    $data=Array();
			      while ($registro=$respuesta->fetch_object()) {
			        $data[]=array(
			          "0"=>$registro->codigo,
			          "1"=>$registro->nombre,
			          "2"=>$registro->paterno,
			          "3"=>$registro->materno,
			          "4"=>$registro->direccion,
			          "5"=>$registro->telefono,
			          "6"=>$registro->distrito,
			          "7"=>$registro->correo,
			          "8"=>"<img src='files/fotos/".$registro->imagen."' height='50px' width='50px' >"
			          
			        );
			      }
			    $resultados=array(
			      "sEcho"=>1,//INFORMACION PARA EL DATATABLE
			      "iTotalRecords"=>count($data), //ENVIAMOS EL TOTAL DE REGISTRO AL DATATABLE
			      "iTotalDisplayRecords"=>count($data),//ENVIAMOS EL TOTAL DE REGISTROS A VISUALIZAR
			      "aaData"=>$data
			    );
			    echo json_encode($resultados);
    break;

    case 'selectDistrito':
       require_once "../modelo/Cliente.php";
       $cliente = new Cliente();
       $respuesta = $cliente->seleccionarDistrito();
       while ($registro=$respuesta->fetch_object()) {
         echo '<option value='.$registro->iddistrito.'>'.$registro->distrito.'</option>';
       }
      break;
	}
 ?>