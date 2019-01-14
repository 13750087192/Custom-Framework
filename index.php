<?php
/**
 * 自动加载类文件函数
 */
function userAutoload($class_name){
	//先处理已确定的（框架中的核心类）
	//类名与类文件映射数组
	$framework_class_list=array(
        //'类名'=>'类文件地址'
        'Controller'=>'./Framework/Controller.class.php';
        'Model'=>'./Framework/Model.class.php';
        'Factory'=>'./Framework/Factory.class.php';
        'MySQLDB'=>'./Framework/MySQLDB.class.php';
		)

}
spl_autoload_register('userAutoload');

//确定分发参数
//确定平台
$default_platfrom='test';
define('PLATFROM',isset($_GET['p']) ? $_GET['p'] : $default_platfrom);

//控制器类分发

$default_controller='Member';
define('CONTROLLER',isset($_GET['c']) ? $_GET['c'] : $default_controller);

//方法分发
$default_action='list';
define('ACTION',isset($_GET['a']) ? $_GET['a'] : $default_action);

$controller_name=CONTROLLER.'Controller';

//拼凑当前方法动作名字符串
$action_name=ACTION.'Action';

//加载控制器类
require'./Application/'.PLATFROM.'/controller/'.$controller_name.'.class.php';

//实例化
$controller = new $controller_name();//可变类

//调用方法
$controller ->$action_name();//可变方法