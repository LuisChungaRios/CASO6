
var tabla;
$(document).ready(function(){

  listar();
  guardar();
   //CARGAMOS LOS ITEMS AL SELECT DISTRITO
  $.post("controlador/controlador.php?op=selectDistrito",function (r){
    $("#iddistrito").html(r);
    // $("#iddistrito").selectpicker('refresh');
  });
 
});


//FUNCION LISTAR
 function listar() {
     tabla=$('#tabla_registro').dataTable({
     "aProcessing":true,//Activamos el procesamiento del datatables
     "aServerSide":true,//Paginacion y filtrado realizados por el servidor
     dom: 'Bfrtip',//Definimos  los elementos del control de tabla
   
     "ajax": {
       url:"controlador/controlador.php?op=listar",
       type: "get",
       dataType: "json",
       error: function(e){
         console.log(e.responseText);
       }
     },
     "bDestroy": true,
     "iDisplayLength": 5,//Paginacion
     "order":[[0,"desc"]]//ordenar(columna,orden)

   }).DataTable();
 }

function guardar() {
  $("#registrar").click(function(e){
    e.preventDefault();
    console.log("Gasd");
    var datos = new FormData($("#formulario")[0]);
    // for([key,value] of datos.entries()){
    //   console.log(key + " : " + value);
    // } 
    $.ajax({
      url:"controlador/controlador.php?op=guardaryeditar",
      type:"POST",
      data: datos,
      contentType:false,
      processData:false,
      success: function(respuesta) {
        bootbox.alert(respuesta);
      
       tabla.ajax.reload();
      }
    });
      limpiar();
  });
  
}

function limpiar() {
  $("#nombres").val("");
  $("#paterno").val("");
  $("#materno").val("");
  $("#distrito").val("");
  $("#correo").val("");
  $("#codigo").val("");
  $("#direccion").val("");
  $("#telefono").val("");
  $("#foto").val("");
}