<?php
// 删除辉达动态
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$sql="delete from dynamic where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>