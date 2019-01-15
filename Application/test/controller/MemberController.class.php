<?php
/**
 *控制器类
 */
class MemberController extends Controller{

	/**
	 * 比赛列表操作
	 */
	public function listAction(){
	
		//通过工厂获得对象
//		require'./Framework/Factory.class.php';
		$m_match = Factory::M('MemberModel');

		$match_list = $m_match->getlist();

		var_dump($match_list);die;

		//载入负责显示的html文件
		require CURRENT_VIEW_PATH.'/match_list_v.html';
	}
	
	/**
	 * 比赛删除
	 */
	public function removeAction(){

	}
}