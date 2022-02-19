<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Sistema | </title>

	<!-- Bootstrap -->
	<link href="estilos/bootstrap/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="estilos/fontawesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="estilos/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="estilos/icheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="estilos/wysiwyg/prettify.min.css" rel="stylesheet">
	<!-- Select2 -->
	<link href="estilos/select2/select2.min.css" rel="stylesheet">
	<!-- Switchery -->
	<link href="estilos/switchery/switchery.min.css" rel="stylesheet">
	<!-- starrr -->
	<link href="estilos/starrr/starrr.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="estilos/daterangepicker/daterangepicker.css" rel="stylesheet">
	
	
	<!-- Datatables -->
    
    <link href="estilos/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="estilos/datatables/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="estilos/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="estilos/datatables/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="estilos/datatables/scroller.bootstrap.min.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="estilos/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-leaf"></i> <span>My Sistema</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="img/img.jpg" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Bienvenido</span>
							<?php echo('<h2>Gabriel</h2>'); ?>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a id="VPzControl"><i class="fa fa-cubes"></i> Control <span class="label label-success pull-right"></span></a></li>
								<li><a id="VPzEmpleados"><i class="fa fa-users"></i> Empleados <span class="label label-success pull-right"></span></a></li>
								<li><a id="VPzNomina"><i class="fa fa-money"></i> Nómina <span class="label label-success pull-right"></span></a></li>
								<li><a id="VPzUsuarios"><i class="fa fa-key"></i> Usuarios <span class="label label-success pull-right"></span></a></li>
								<li><a id="VPzReportes"><i class="fa fa-bar-chart-o"></i> Reportes <span class="label label-success pull-right"></span></a></li>
							</ul>
						</div>
						<div class="menu_section">
							<h3>Ajustes</h3>
							<ul class="nav side-menu">
								<li><a href="javascript:void(0)"><i class="fa fa-gear"></i> General <span class="label label-success pull-right"></span></a></li>
								<li><a href="javascript:void(0)"><i class="fa fa-barcode"></i> Ticket <span class="label label-success pull-right"></span></a></li>
								
							</ul>
						</div>

					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="Settings">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="FullScreen">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Lock" id="limpiar">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">
								<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
									<img src="img/img.jpg" alt=""><?php echo('Gabriel'); ?>
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
								</div>
							</li>

							<li role="presentation" class="nav-item dropdown open">
								<a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-envelope-o"></i>
									<span class="badge bg-green">6</span>
								</a>
								<ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="img/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="img/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="img/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="img/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<div class="text-center">
											<a class="dropdown-item">
												<strong>See All Alerts</strong>
												<i class="fa fa-angle-right"></i>
											</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			
			<div class="right_col" role="main" id="contenido">
			
			</div>
			
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
	<!-- FastClick -->
	<script src="js/fastclick/fastclick.js"></script>
	<!-- NProgress -->
	<script src="js/nprogress/nprogress.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="js/progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="js/icheck/icheck.min.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="js/daterangepicker/moment.min.js"></script>
	<script src="js/daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="js/wysiwyg/bootstrap-wysiwyg.min.js"></script>
	<script src="js/wysiwyg/jquery.hotkeys.js"></script>
	<script src="js/wysiwyg/prettify.js"></script>
	<!-- jQuery Tags Input -->
	<script src="js/jquery/jquery.tagsinput.js"></script>
	<!-- Switchery -->
	<script src="js/switchery/switchery.min.js"></script>
	<!-- Select2 -->
	<script src="js/select2/select2.full.min.js"></script>
	<!-- Parsley -->
	<script src="js/parsley/parsley.min.js"></script>
	<!-- Autosize -->
	<script src="js/autosize/autosize.min.js"></script>
	<!-- jQuery autocomplete -->
	<script src="js/autocomplete/jquery.autocomplete.min.js"></script>
	<!-- starrr -->
	<script src="js/starrr/starrr.js"></script>
	<!-- Custom Theme Scripts -->
	<script src="js/custom.min.js"></script>
	
	<!-- Datatables -->
    <script src="js/datatables/jquery.dataTables.min.js"></script>
    <script src="js/datatables/dataTables.bootstrap.min.js"></script>
    <script src="js/datatables/dataTables.buttons.min.js"></script>
    <script src="js/datatables/buttons.bootstrap.min.js"></script>
    <script src="js/datatables/buttons.flash.min.js"></script>
    <script src="js/datatables/buttons.html5.min.js"></script>
    <script src="js/datatables/buttons.print.min.js"></script>
    <script src="js/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="js/datatables/dataTables.keyTable.min.js"></script>
    <script src="js/datatables/dataTables.responsive.min.js"></script>
    <script src="js/datatables/responsive.bootstrap.js"></script>
    <script src="js/datatables/dataTables.scroller.min.js"></script>
    <script src="js/datatables/jszip.min.js"></script>
    <script src="js/datatables/pdfmake.min.js"></script>
    <script src="js/datatables/vfs_fonts.js"></script>
	
	<script>
		$('[id*=VPz').click(function() {
			$('#contenido').empty();
			var vista=this.id;
		$.ajax({
			type: "POST",
			url: "controllers/controller.php",
			data: { view: vista }
		}).done(function( contenido ) {
			$('#contenido').append(contenido);
		});
		});
		
		$('#limpiar').click(function() {
			$('#contenido').empty();
		});
	</script>
	<?php
	
		function get_usuario()
		{
			
		}
		function get_rol()
		{
			
		}
		function get_system()
		{
			
		}
	?>


</body>
</html>
