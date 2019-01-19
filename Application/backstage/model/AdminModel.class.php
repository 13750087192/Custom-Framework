<?php
/**
 * Created by PhpStorm.
 * User: Mr.Lin
 * Date: 2019/1/16
 * Time: 10:32
 */

class AdminModel extends Model
{
   /*
    * 验证管理员是否合法
    * @param  $admin_name
    * @param  $admin_password
    * $return bool
    */
   public function check($admin_name,$admin_password){
       $sql="SELECT * FROM 'fx_admin' WHERE admin_name = '$admin_name' and password = md5('$admin_password')";
       $row=$this->_dao->getRow($sql);
       return (bool) $row;
   }



}