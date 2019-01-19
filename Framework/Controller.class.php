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

	/*
	 * 跳转
	 * @param     $url     目标url
	 * @param     $info    提示信息
	 * @param     $wait    等待时间
	 */
	protected function _jump($url,$info=NULL,$wait=3){
         //判断立即跳转还是提示
        if(is_null($info)){
            //立即，header('Location:')
            header('Location:'.$url);
        }else{
            //提示后，Refresh:N,URL=$url
            header("Refresh:$wait;URL=$url");
            echo $info;
        }
        //终止
        exit;
    }
	
}