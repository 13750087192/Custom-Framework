<?php
/**
 * 后台管理首页
 * Created by PhpStorm.
 * User: Mr.Lin
 * Date: 2019/1/16
 * Time: 16:00
 */

class IndexController extends Controller


{
    /**
     * 首页动作
     */
    public function indexAction(){
      setCookie('key','value',0,'','kang.com');
    }


}