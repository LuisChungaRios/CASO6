<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
    <script type="text/javascript" src="vistas/js/jquery-3.3.1.min.js">
    </script>
    <link rel="stylesheet" href="vistas/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vistas/datatables/bootstrap.css">
    <link rel="stylesheet" href="vistas/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vistas/datatables/select.bootstrap4.min.css">
    <link rel="stylesheet" href="vistas/font/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="vistas/css/bootstrap-select.min.css">
     <link rel="stylesheet" href="vistas/css/estilos.css">
<body>
		<div class="container">
			<div class="row">
				<div class="col-3"></div>
				<div class="col-12">
					<form action="" class="" method="post" id="formulario" >
						<label class="col-12">REGISTRO DEL NUEVO CLIENTE</label>
						<!-- <img src="" width="200px" height="300px"> -->
							<div class="form-group col-4">
								<label>Codigo</label>
							<input type="text" name="codigo"  class="form-control" id="codigo">
							</div>
								<div class="form-group col-12">
									<label>Nombres</label>
								<input type="text" name="nombres"  class="form-control " id="nombres">
								</div>
								<div class="form-group row">
									<div class=" col-6">
										<label>Paterno</label>
										<input type="text" name="paterno"  class="form-control" id="paterno">
									</div>
								<div class=" col-6">
										<label>Materno</label>
									<input type="text" name="materno" class="form-control"  id="materno">

								</div>
								</div>
								<div class="form-group col-12">
											<label>Direccion</label>
								<input type="text" name="direccion" class="form-control"  id="direccion">

								</div>
								<div class="form-group row" >
									<div class="form-group col-6">
									<label>Telefono</label>
								<input type="text" name="telefono" maxlength=9 class="form-control" id="telefono">
								
								</div>
								<div class="form-group col-4">
								<label>Distrito</label>
								 <select id="iddistrito" name="iddistrito" class="form-control  " ="true" required="">
								 	
								</select>

								</div>
								</div>
								<div class="form-group row" >
									<div class="form-group col-6">
											<label>Correo electronico</label>
								<input type="text" name="correo"  class="form-control" id="correo">

								</div>
								<div class="form-group col-6">
									<label>EXAMINAR</label>
									<input type="file" name="foto" id="foto">
								</div>
								</div>
								<input type="submit" name="registrar" class="btn btn-primary"id="registrar" value="registrar">
					</form>
				</div>
				<div class="col-3"></div>
			</div>
			<div class="row">
				<div class="col-12">
					<table id="tabla_registro" class="table table-hover table-condensed">
						<thead>
							
								<th>Codigo</th>
								<th>Nombres</th>
								<th>Paterno</th>
								<th>Materno</th>
								<th>Direccion</th>
								<th>Telefono</th>
								<th>Distrito</th>
								<th>Correo Electronico</th>
								<th>imagen</th>

							
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	
  	<script src="vistas/bootstrap/bootstrap.min.js"></script>
    <script src="vistas/bootstrap/popper.min.js"></script>
   	<script src="vistas/datatables/jquery.dataTables.min.js"></script>
    <script src="vistas/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="vistas/datatables/dataTables.select.min.js"></script>
    <script src="vistas/js/bootbox.min.js"></script>
    <!-- <script src="vistas/js/bootstrap-select.min.js"></script> -->
   	<script src="vistas/js/script.js"></script>
</body>
</html>