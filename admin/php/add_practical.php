<?php
//  学员实训结果保障
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$img=$_GET['img'];//基站图片
	$sense=$_GET['sense'];//实训的意义	
	$guarantee=$_GET['guarantee'];//实训保障体系
	$sql="update practical set img='$img',sense='$sense',guarantee='$guarantee' where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>