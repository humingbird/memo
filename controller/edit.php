<?php
require_once('../conf/memo.conf.php');
require_once(HOME_URL.'model/EditModel.php');
require_once(HOME_URL.'view/EditView.php');

class Edit{
	public $model;
	public $path;

	public function __construct(){
		$this->model = new EditModel;		
		$this->view = new EditView;

		$this->path = explode('/',$_SERVER['PATH_INFO']);

		if($this->path[1] == 'regist'){
			$this->edit();
		}else if($this->path[1] == 'del'){
			$this->delete();
		}else{
			$this->view();
		}
	}
	
	//編集内容を登録する
	public function edit(){
		$params = $_POST;
		$result = $this->model->setParams($params);
		if($result == false){
			$this->view->values('mode','edit_false');
		}else{
			$this->view->values('mode','edit');
		}
		$this->view->display();
	}
	//編集画面の表示
	public function view(){
		$data = $this->model->getDbData($this->path[2]);

		$this->view->values('db_data',$data);
		$this->view->values('mode','view');
		$this->view->display();
	}

	//単語の削除
	public function delete(){
		$result = $this->model->deleteDbData($this->path[2]);
		if($result == false){
			$this->view->values('mode','del_false');
			$this->view->display();
		}else{
			$this->view->values('mode','del');
			$this->view->display();
		}
	}
}

$test = new Edit;
