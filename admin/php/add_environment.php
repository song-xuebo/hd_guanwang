<?php
// 修改校园环境
    include('./public.php');
    $name=$_GET['name'];//名字
    $imgUrls=$_GET['imgUrls'];//以传递过来的图片路径
	$sql="select * from environment where name='$name'";
	$res=$conn->query($sql);
	$arr=$res->fetch_assoc();
	if($arr['img']==null || $imgUrls==null){
		$imgUrls=$imgUrls;
	}
    $sql="update environment set img='$imgUrls' where name='$name'";
    $res=$conn->query($sql);
    if($res){
    	echo 'ok';
    }else{
    	echo 'no';
    }
?>