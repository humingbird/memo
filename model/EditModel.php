<?php
require_once('../conf/memo.conf.php');
require_once(HOME_URL.'model/dao/ParamsInfo.php');

class EditModel{
	public $paramsInfo;

	public function __construct(){
		$this->paramsInfo = new ParamsInfo;
	}

	public function getParams(){
		//IDと単語が存在するかどうかの確認
		if($_POST['id'] && $_POST['title']){
			$params = $_POST;
		}else{
			return false;
		}
		return $params;
	}

	public function setParams($params){
		if($params['id'] && $params['title']){
			$this->paramsInfo->update($params);
		}else{
			return false;
		}
		return true;
	}
	
	public function getDbData($id){
		if(is_null($id)){
			return false;
		}else{
			$db_data = $this->paramsInfo->selectById($id);
		}	

		return $db_data;
	}

	public function deleteDbData($id){
		if(is_null($id)){
			return false;
		}else{
			$stmt = $this->paramsInfo->delete($id);
		}
		return true;
	}
}
