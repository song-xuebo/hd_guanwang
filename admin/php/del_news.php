<?php
// 删除新闻动态
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$sql="delete from news where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>