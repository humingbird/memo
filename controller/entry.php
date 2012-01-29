<?php
require_once '../conf/memo.conf.php';
require_once HOME_URL.'view/entry.view.php';
require_once HOME_URL.'model/EntryModel.php';

/**
 * 新規登録
 */
class Entry {

	public function __construct(){

		//登録しようとしているものがあれば登録処理
		if( empty($_POST) ){
			$this->display();
		}else{
			$this->entryWord();
		}
	}
	
	//表示
	public function display(){
		$view = new EntryView;
		$view->display();
	}
	
	//登録処理
	public function entryWord(){
		$model = new EntryModel;
		$result = $model->entryWord($_POST);
		
		if($result ==false){
			echo "登録に失敗しました";
		}else{
			echo "登録しました";
		}
	}
}
$test = new Entry();
