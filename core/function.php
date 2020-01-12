<?php
	function script($txt,$type,$url=""){
		switch($type){
			case "return" : $url = $_SERVER['HTTP_REFERER']; break;
			case "main" :  $url = '/view'; break;
			case "url" : $url = $url;
		}

		echo '
			<script>
				alert("'.$txt.'");
				location.href="'.$url.'"
			</script>
		';
	}

	function _printr($arr = []){
		if(!is_array($arr)) return false;

		foreach($arr as $key => $val){
			echo "key => ".$key.'<br/>';
			print_r($val);
			echo '<br/>---------------------------------------------------------</br>';
		}
	}