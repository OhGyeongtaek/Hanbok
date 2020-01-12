<?php
	if($_GET['mode'] === 'intro'){
		include '/empty.php';
		exit();
	}
	if(empty($_GET['mode'])) header('Location:/view');

	define("HOME",__dir__);

	define("APP",HOME.'/app/');
	define("PAGE",HOME.'/page/');
	define("CORE",HOME.'/core/');
	
	define("MODEL",APP.'model/');
	define("CON",APP.'controller/');

	include CORE."function.php";
	include CORE."model.php";
	include CORE."view.php";
	include CORE."controller.php";

	if(is_file(CON.$_GET['controller'].'_con.php')){
		include CON.$_GET['controller'].'_con'.php;
		$con = new $_GET['controller']();

		if(method_exists($con,'_'.$_GET['method']))
			$con->{'_'.$_GET['method']}();
	}else new controller();

	if($_GET['mode'] === "view" && $_GET['controller'] != 'intro') view::excute();