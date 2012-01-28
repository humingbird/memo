<?php
require_once('../conf/memo.conf.php');
require_once(HOME_URL.'model/DB.php');

class ParamsInfo{
	public $db;
	public function __construct(){		
		$this->db = new DB;
	}

	public function insert($name,$description){
		if($name){
			$params = array(
					":title"=>$name,
					":description"=>$description
				);
		}else{
			echo"単語名が入力されていません";
		}
		$sql = "INSERT INTO `params_info`(`title`,`description`
				,`update_date`,`register_date`
				)VALUES(
				:title,:description,NOW(),NOW()
				)";
		$stmt = $this->db->execute($sql,$params);
	}
}

