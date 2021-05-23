<?php
// 修改辉达动态
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$message=$_GET['message'];//大标题
	$img=$_GET['img'];//图片
	// $img=$_GET['img'];//图片
	$info=$_GET['info'];
	//--解析Json，获取对应的变量值
	$obj=json_decode($info,TRUE);
	$mesTitle = $obj;
	// foreach($mesTitle as $key=>$val){
	// 	print_r($val['mesTitle'].','.$val['mesCon']).'<br>';
	// }
	// print_r($mesTitle[0]['mesTitle'].','.$mesTitle[0]['mesCon']);
	$mesA=$mesTitle[0]['mesTitle'];//标题A
	$conA=$mesTitle[0]['mesCon'];//内容A
	$mesB=$mesTitle[1]['mesTitle'];//标题B
	$conB=$mesTitle[1]['mesCon'];//内容B
	$mesC=$mesTitle[2]['mesTitle'];//标题C
	$conC=$mesTitle[2]['mesCon'];//内容C
	if($id=='dynamic'){
		$sql="insert into dynamic (message,img,mesA,conA,mesB,conB,mesC,conC) values('$message','$img','$mesA','$conA','$mesB','$conB','$mesC','$conC')";
		$res=$conn->query($sql);
	}
	$sql="update dynamic set message='$message',img='$img',mesA='$mesA',conA='$conA',mesB='$mesB',conB='$conB',mesC='$mesC',conC='$conC' where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>