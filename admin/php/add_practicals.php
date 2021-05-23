<?php
//  学员实训结果保障
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$img=$_GET['img'];//基站图片
	$title=$_GET['title'];//实训的意义	
	$content=$_GET['content'];//实训保障体系
	if($id=='add'){
		$sql="insert into practicals (img,title,content) values('$img','$title','$content')";
		$res=$conn->query($sql);
	}
	$sql="update practicals set img='$img',title='$title',content='$content' where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>