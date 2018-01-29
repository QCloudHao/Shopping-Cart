<?php 
/**
 *连接book_sc数据库的函数集合
 */
function db_connect(){
	$result=new mysqli('localhost','book_sc','password','book_sc');
	if(!$result){
		return false;
	}
	$result->autocommit(TRUE);
	return $result;
}

function db_result_to_array($result){
	//将一个MySQL结果标识符转换为结果数组
	$res_array=array();
	for($count=0;$row=$result->fetch_assoc();$count++){
		$res_array[$count]=$row;
	}
	return $res_array;
}

 ?>