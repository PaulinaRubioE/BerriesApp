<div class="">

	<div class="clearfix"></div>
	<div class="row">
        <div class="col-md-12">
            <div class="">
				<div class="x_content">
					<div class="row">
						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
							<div class="tile-stats">
							<div class="icon"><i class="fa fa-caret-square-o-right"></i>
							</div>
							<div class="count">125</div>
							<h3>Entradas Totales</h3>
							</div>
						</div>
						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
							<div class="tile-stats">
							<div class="icon"><i class="fa fa-comments-o"></i>
							</div>
							<div class="count">0</div>
		
							<h3>Entradas Faltantes</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title" style="margin:0 auto; display:flex; justify-content: center;">
					<h5>CAPTURE EL CÓDIGO DE BARRAS</h5>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form id="demo-form2" data-parsley-validate class="form-horizontal">
						<div class="item form-group" style=" margin:0 auto !important; display:flex; justify-content: center;">
							<div class="col-md-6 col-sm-6 ">
								<input type="text" id="codigo" required="required" class="form-control" placeholder="" style=" border-radius:10px; background:#517292; height: 50px; color:#fff; text-align:center;">
							</div>
						</div>

						<div class="ln_solid"></div>
						<div class="item form-group">
							<div class="col-md-4 col-sm-4 offset-md-5">
								<button class="btn btn-success" id="aceptar">Aceptar</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$( "#aceptar" ).click(function() {
  $( "#codigo" ).focus();
});
</script>
	