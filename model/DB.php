<?php
require_once'../conf/memo.conf.php';

class DB{
	
	public function __construct(){
	}
	
	public function connectDb(){
		$dsn = DB_URL;
		$user = DB_USER;
		$pwd = DB_PWD;

		try{
    			$dbh = new PDO($dsn, $user, $pwd);
			
			if($dbh == null){
				print('接続に失敗しました');
			}else{
				print('接続に成功しました');
			}
		}catch (PDOException $e){
    			print('Connection failed:'.$e->getMessage());
    			die();
		}
		return $dbh;
		
	}

	public function execute($sql, $params=null){	
		$dbh = $this->connectDb();
		$stmt = $dbh->prepare($sql);
		$stmt->execute($params);
		
		return $stmt;
	}
	
}


