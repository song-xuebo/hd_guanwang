<?php
// 增加服务基站
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$name=$_GET['name'];//名称
	$value=$_GET['value'];//就业人数
	$base=$_GET['base'];//基站
	$baseImg=$_GET['baseImg'];//基站图片	
	$text=$_GET['text'];//基站内容
	$phone=$_GET['phone'];//电话
	if($id=='echarts'){
		$sql="insert into echarts (name,value,base,baseImg,text,phone) values('$name','$value','$base','$baseImg','$text','$phone')";
		$res=$conn->query($sql);
	}
	$sql="update echarts set name='$name',value='$value',base='$base',baseImg='$baseImg',text='$text',phone='$phone' where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>