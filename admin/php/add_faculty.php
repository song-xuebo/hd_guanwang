<?php
// 修改师资力量
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$user=$_GET['user'];//老师姓名
	$info=$_GET['info'];//老师简介
	$course=$_GET['course'];//相关课程
	$img=$_GET['img'];//老师肖像
	if($id=='faculty'){
		$sql="insert into facultys (img,user,intro,course) values('$img','$user','$info','$course')";
		$res=$conn->query($sql);
	}
	$sql="update facultys set img='$img',user='$user',intro='$info',course='$course' where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>