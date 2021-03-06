<?php  
/*
 *基础模型类
 */
class Model{
	protected $_dao;//存储DAO对象的属性，可以在子类方法中被访问，使用DAO对象

    /*
     *初始化DAO
     */
    protected function _initDAO(){
    	//初始化MySQLDB
    	$config=$GLOBALS['config']['db'];
//		require_once'./Framework/MySQLDB.class.php';
		$this->_dao = MySQLDB::getInstance($config);//Daobase Acccess Object 数据库操作对象

    }

    /*
     *构造方法
     */
    public function __construct(){
        //初始化DAO
        $this->_initDAO();
    }
}
