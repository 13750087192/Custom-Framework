<?php

//确定分发参数

//动作
$default_action='list';
$a=isset($_GET['a']) ? $_GET['a'] : $default_action;


//实例化控制器类
require'./MemberController.class.php';

//实例化
$controller = new MemberController();

//拼凑当前方法动作名字符串
$action_name=$a.'Action';
//调用方法
$controller ->$action_name();//可变方法