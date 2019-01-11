<?php
header("Content-type:text/html;charset=utf8");//初始化


//实例化相应的模型类对象，调用某个方法，实现固定功能
// require'./MatchModel.class.php';
// $m_match = new MatchModel();

//通过工厂获得对象
require'./factory.class.php';
$m_match = Factory::M('MatchModel');

$match_list = $m_match->getlist();

//载入负责显示的html文件
require'./template/match_list_v.html';

