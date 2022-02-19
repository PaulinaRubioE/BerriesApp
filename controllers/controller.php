<?php
				
				
if (isset($_POST['view'])) 
{
	$vista=substr($_POST['view'],3);
	echo(render($vista));
}

function render($path)
{
	ob_start();
	include(dirname(__DIR__).'/views/'.$path.'.php');
	$var=ob_get_contents(); 
	ob_end_clean();
	return $var;
}


/*
vControl
vEmpleados
vNomina
vUsuarios
vReportes
*/


?>