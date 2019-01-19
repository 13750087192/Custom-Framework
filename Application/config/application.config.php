<?php
/**
 * Created by PhpStorm.
 * User: Mr.Lin
 * Date: 2019/1/19
 * Time: 12:21
 */

return array(
  'db'=>array(//数据库信息组
      'host'=>'127.0.0.1',
      'port'=>'3306',
      'username'=>'root',
      'password'=>'root',
      'charset'=>'utf8',
      'dbname'=>'millions_stores'
  ),
    'app'=>array(//应用程序组
        'default_platform' => 'test'
     ),
    'backstage'=>array(//后台组
        'default_controller' => 'Index',
        'default_action'     => 'index',
),
    'reception'=>array(//前台组

    ),
    'test'=>array(//测试组
        'default_controller' => 'Member',
        'default_action'     => 'list',
    )




);