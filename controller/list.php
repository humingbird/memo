<?php
require_once('../conf/memo.conf.php');
require_once(HOME_URL.'model/ListModel.php');
require_once(HOME_URL.'view/ListView.php');

	//modelを読み込む
	$model = new ListModel;
	$list = $model->getList();

	//viewに投げる
	$view = new ListView;
	$view->values('word_list',$list);
	$view->display();
?>
