<?php
// 删除轮播图
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$sql="delete from banners where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>