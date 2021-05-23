<?php
// 删除师资力量
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$sql="delete from facultys where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>