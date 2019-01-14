<?php
/**
 * 基类控制器
 */
class Controller{

	/**
	 * 构造方法
	 */
	public function __construct(){
		$this->_initContenType();
	}

	/**
	 * 初始化Conten-type
	 */
	protected function _initContenType(){
		header("Content-type:text/html;charset=utf8");
	}
	
}