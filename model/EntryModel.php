<?php
require_once'../conf/memo.conf.php';
require_once'dao/ParamsInfo.php';

class EntryModel{

	public function __construct(){
	}

	public function entryWord($params){
		//登録するものが無ければ何もしない
		if( !$params['word_name'] ){
			return false;
		}

		$word = $params['word_name'];
		$description = $params['word_description'];	
		//DBにINSERT
		
		$paramsInfo = new ParamsInfo;
		$paramsInfo->insert($word,$description);

		return true;
	}
}
