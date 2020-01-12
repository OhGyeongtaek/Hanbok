<?php
	class Controller{
		public static $model = [];

		protected $nowModel;

		public function __construct(){
			$this->loader("menu");
			$this->nowModel();
		}

		protected function loader($name){
			if(!is_file(MODEL.$name.'_model.php')) return false;
			include MODEL.$name.'_model.php';
			$model = $name.'Model';
			view::$model[$name] = new $model();
			self::$model[$name] = new $model();
 		}

		private function nowModel(){
			if(!is_file(MODEL.$_GET['controller'].'_model.php')) return false;
			include MODEL.$_GET['controller'].'_model.php';
			$model = $_GET['controller'].'Model';
			$this->nowModel = new $model();
		}
	}