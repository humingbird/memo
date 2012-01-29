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
	//指定件数分要素を全部取ってくる
	public function select($limit=3){
		$sql = sprintf("SELECT * FROM `params_info` ORDER BY `update_date` DESC LIMIT %d",$limit);

		$stmt = $this->db->execute($sql);
		$list = $this->db->fetch($stmt);

		return $list;
	}

	//更新する
	public function update($values){
		$params = array(
				'title'=>$values['title'],
				'description'=>$values['description'],
			);
		$sql = sprintf("UPDATE `params_info` SET `title`=:title,`description`=:description,
							`update_date`=NOW() WHERE `id`= %d",$values['id']);
		$stmt = $this->db->execute($sql,$params);
	}
	
	//IDから取得する
	public function selectById($id){
		$sql = sprintf("SELECT * FROM `params_info` WHERE `id`=%d",$id);

		$stmt = $this->db->execute($sql);
		$result = $this->db->fetch($stmt);

		return $result;
	}
	
	//削除する
	public function delete($id){
		$sql = sprintf("DELETE FROM `params_info` WHERE `id` = %d",$id);
		
		$stmt = $this->db->execute($sql);
	}

}
