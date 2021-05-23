<?php
// 删除课题大纲
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$sql="delete from course_outline where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>