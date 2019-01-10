<?php

class MatchModel{

	public function getlist(){
		$config=array('host'=>'127.0.0.1','port'=>'3306','username'=>'root','password'=>'root','charset'=>'utf8','dbname'=>'')
		require'./MySQLDB.class.php';
		$dao = MySQLDB::getInstance($config);

		$sql=""//sql语句

		return $dao->getAll($sql);//输出查询结果
	}
}