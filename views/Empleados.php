<?php
	require_once('../models/datamodel.php');

	
	 function _getEmpleados()
	{
	    
	    $dConexion = new DataModel();
	    $sEmpleados = $dConexion->get_empleados();
	    
	   return $sEmpleados;
		
	}
?>

<div class="row">
	<div class="col-md-12 col-sm-12 ">
               
               <div class="x_panel">
                <div class="x_title">
                  <h2>Opciones</h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Nuevo</button>
               
                  <div class="input-group col-md-4 col-sm-4 ">
                  <input type="text" class="form-control" placeholder="Buscar..." id="txtbuscar">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button" id="buscar"><i class="fa fa-search"></i></button>
                  </span>
                  </div>
                
                
                </div>
              </div>
               
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de empleados</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%; font-size:12px;">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NOMBRE</th>
                          <th>TELÉFONO</th>
                          <th>PUESTO</th>
						  <th>ESTATUS</th>
						  <th>ACCIÓN</th>
                        </tr>
                      </thead>
					  <tbody id="DataResult">
					  </tbody>

                    </table>
                  </div>
</div>
 
<!-- Modal Nuevo -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Nuevo Empleado</h4>
        </button>
      </div>
      <div class="modal-body">

<div class="x_content">
	<br />
	<form class="form-label-left input_mask">

		<div class="col-md-12 col-sm-12  form-group has-feedback">
			<input type="text" class="form-control has-feedback-left" id="txtnombre" placeholder="Nombre Completo">
			<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		</div>

		<div class="col-md-6 col-sm-6  form-group has-feedback">
			<input type="email" class="form-control has-feedback-left" id="txtcorreo" placeholder="Correo">
			<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
		</div>

		<div class="col-md-6 col-sm-6  form-group has-feedback">
			<input type="tel" class="form-control has-feedback-left" id="txttelefono" placeholder="Teléfono">
			<span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
		</div>
		<div class="col-md-6 col-sm-6  form-group has-feedback">
			<input type="tel" class="form-control has-feedback-left" id="txtdomicilio" placeholder="Domicilio">
			<span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
		</div>
		<div class="col-md-6 col-sm-6  form-group has-feedback">
			<input class="date-picker form-control has-feedback-left" placeholder="Fecha Nacimiento" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" id="txtfechanac">
				<script>
					function timeFunctionLong(input) {
						setTimeout(function() {
							input.type = 'text';
						}, 60000);
					}
				</script>
			<span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
		</div>
		<div class="col-md-6 col-sm-6  form-group has-feedback">
			<select id="txtpuesto" class="form-control has-feedback-left" required>
				<option value="">Puesto</option>
				<option value="1">Administrador</option>
				<option value="2">Supervisor</option>
				<option value="3">Empleado</option>
			</select>
			<span class="fa fa-briefcase form-control-feedback left" aria-hidden="true"></span>
		</div>
		<div class="col-md-6 col-sm-6  form-group has-feedback">
			<select id="txtstatus" class="form-control has-feedback-left" required>
				<option value="">Status</option>
				<option value="1">Activo</option>
				<option value="2">Suspensión</option>
				<option value="3">Baja</option>
			</select>
			<span class="fa fa-flag form-control-feedback left" aria-hidden="true"></span>
		</div>
	</form>

	</div>
		</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btnguardar">Guardar</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
			</div>
		</div>
	</div>
</div>

<script>
$("#buscar").click(function(){
	try
	{
		$('#DataResult').empty();
	}
	finally
	{
		var txtBuscar = $('#txtbuscar').val();
		$.get("controllers/controller_empleados.php?id="+ txtBuscar, function(data){
		var empleados="";
		const obj = JSON.parse(data);
		for(var i=0;i<obj.length;i++)
		{
			empleados+="<tr>";
			empleados+="<td>"+obj[i].ID+"</td>";
			empleados+="<td>"+obj[i].NOMBRE+"</td>";
			empleados+="<td>"+obj[i].TELEFONO+"</td>";
			empleados+="<td>"+obj[i].PUESTO+"</td>";
			empleados+="<td>"+obj[i].ESTATUS+"</td>";
			empleados+="<td><button type='button' class='btn btn-success' style='font-size:12px;'>Editar</button><button type='button' class='btn btn-danger' style='font-size:12px;'>Eliminar</button></td>";


			empleados+="</tr>";
		}
		$('#DataResult').append(empleados);
		
		});
	}	
});		

$("#btnguardar").click(function(){
	var p = {};
	p.nombre = $("#txtnombre").val();
	p.fechanac = $("#txtfechanac").val();
	p.correo = $("#txtcorreo").val();
	p.telefono = $("#txttelefono").val();
	p.domicilio = $("#txtdomicilio").val();
	$.ajax({
    url: 'controllers/controller_empleados.php',
    type: "POST",
    dataType: 'json',
    data: JSON.stringify({
						nombre: p.nombre,
						fecha_nacimiento: p.fechanac,
						domicilio: p.domicilio,
						telefono: p.telefono,
						correo: p.correo, 
						puesto: 1,
						estatus: 2
						 }),
    contentType: 'application/json;charset=UTF-8',
	success: function (data) {
		console.log(data);
		alert('Guardado correctamente');
		$('#btncacelar').click();

    }
	
	});

});	
</script>