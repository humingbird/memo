<?php
require_once('../conf/memo.conf.php');
require_once('smarty.php');

class EditView{
	public $smarty;
	public function __construct(){
		$this->smarty = setSmarty();
	}
	
	public function values($key,$value){
		$this->smarty->assign($key,$value);
	}

	public function display(){
		$this->smarty->display('edit.tpl');
	}
}
	
