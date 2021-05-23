<?php
// 删除各科课题大纲
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$sql="delete from ui_course_center where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>