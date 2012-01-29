<?php
require_once('../conf/memo.conf.php');
require_once(HOME_URL.'model/dao/ParamsInfo.php');

class ListModel{
	public $paramsInfo;
	public function __construct(){
		$this->paramsInfo = new ParamsInfo;
	}
	
	public function getList($limit=3){
		
		$list= $this->paramsInfo->select($limit);
	 	return $list;
	}
}
