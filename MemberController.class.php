<?php
/**
 *控制器类
 */
class MemberController{

	/**
	 * 比赛列表操作
	 */
	public function listAction(){
		header("Content-type:text/html;charset=utf8");//初始化
		//通过工厂获得对象
		require'./factory.class.php';
		$m_match = Factory::M('MemberModel');

		$match_list = $m_match->getlist();

		var_dump($match_list);die;

		//载入负责显示的html文件
		require'./template/match_list_v.html';
	}
	
	/**
	 * 比赛删除
	 */
	public function removeAction(){

	}
}