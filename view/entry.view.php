<?php
//smarty
require_once('../conf/memo.conf.php');
require_once 'smarty.php';

class EntryView{

	public function display(){
		$smarty = setSmarty();
		$smarty->assign('home',URL);
		$smarty->display('entry.tpl');
	}
	
}

/*
function entry(){
	$entry = new Entry;
	$entry->regist($_POST);
}

//実行
$smarty->display('entry.tpl');
if(!empty($_POST)){
	entry();
}
*/
