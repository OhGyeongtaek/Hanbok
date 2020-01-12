<?php
	class model{
		protected $db;

		public function __consttuc(){
			$this->$db = new PDO("mysql:host=127.0.0.1; dbname=hanbock; charset=utf8",'root','');
			$this->$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}

		private function entity($arr){
			if(!is_array($arr)) return false;
			foreach($arr as $key => $val){
				if(is_array($arr))
					$this->entity($val);
				else
					$arr[$key] = htmlentities(stripslashes($val),ENT_QUOTES,'utf-8');
			}
			return $arr;
		}

		protected function query($sql,$arr = []){
			try{
				$stmt = $this->db->prepare($sql);
				$stmt->excute($arr);
				return $stmt;
			}catch(PDO_EXCEPTION $e){
				exit(nl2br($e));
			}
		}

		protected function result($sql,$arr=[]){
			return $this->entity($this->query($sql,$arr)->fetch());
		}

		protected function resultAll($sql,$arr=[]){
			return $this->entity($this->query($sql,$arr)->fetchAll());
		}
	}