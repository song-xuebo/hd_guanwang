<?php
// 删除校园环境
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$sql="delete from environment where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>