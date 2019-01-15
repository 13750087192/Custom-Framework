<?php


class MemberModel extends Model{

	public function getlist(){

		$sql="select * from fx_member where member_id > 1";//sql语句

		return $this->_dao->getAll($sql);//输出查询结果
	}


    /*
     *删除某一条数据
     */ 
	public function removeMatch($m_id){
		$sql="delete from 'match' where m_id = $m_id";
		return $this->_dao->query($sql);
	}
}