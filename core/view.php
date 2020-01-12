<?php
	class view{
		public static $data = [];
		public static $model = [];

		public function init(){
			self::$data['menu'] = self::$model['menu']->menu;
		}

		public static function excute(){
			self::init();
			self::$data['link'] = empty($_GET['controller'])? 'main' : 'sub';

			extract(self::$data);

			include PAGE."header.php";
			include PAGE.$link.".php";
			include PAGE."footer.php";
		}
	}