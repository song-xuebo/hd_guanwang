<?php
// 修改课题大纲
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$kczk=$_GET['kczk']; 
	$kclx=$_GET['kclx'];
	$newLx=$_GET['newLx'];
	if($id=='course_center'){
		$sql="insert into course_outline (title,bodyTitle,bodyItem) values('$kczk','$kclx','$newLx')";
		$res=$conn->query($sql);
	}
	$sql="update course_outline set title='$kczk',bodyTitle='$kclx',bodyItem='$newLx' where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>