<?php
// 删除服务基站
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$sql="delete from echarts where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>