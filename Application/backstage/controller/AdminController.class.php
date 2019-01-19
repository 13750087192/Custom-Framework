<?php
/**
 * Created by PhpStorm.
 * User: Mr.Lin
 * Date: 2019/1/16
 * Time: 10:20
 */

class AdminController extends Controller
{
  /*
   * 登录表单动作
   */
  public function loginAction(){
      //载入当前的视图层模板
      require CURRENT_VIEW_PATH.'login.html';
  }
  /*
   * 验证管理员是否合法
   */
  public function checkAction(){

      //获得表单数据
      $admin_name = $_POST['username'];
      $admin_password = $_POST['password'];
      //从数据库中验证管理员信息是否存在合法
      $m_admin = Factory::M('AdminModel');
      if($m_admin->check($admin_name,$admin_password)){
          //验证通过
      }else{
          //验证不通过
      }
  }
}