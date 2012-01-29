<?php
require_once('../conf/memo.conf.php');
require_once('smarty.php');

class ListView{
	public $smarty;
	public function __construct(){
		$this->smarty = setSmarty();
		$this->smarty->assign('home',URL);
	}

	public function display(){
		$this->smarty->display('list.tpl');
	}
	
	public function values($key,$value){
		$this->smarty->assign($key,$value);
	}
}

