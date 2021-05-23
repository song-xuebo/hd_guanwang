<?php
// 修改课程的课题大纲
    include('./public.php');
	$id=$_GET['id'];
	$ui_title=$_GET['ui_title'];//标题
	$small_title=$_GET['small_title'];//小标题A
	$ui_hour=$_GET['ui_hour'];//课时
	$conB=$_GET['conB'];//内容B
	$de_json = json_decode($conB,TRUE);
	$B=null;
	foreach($de_json as $key=>$value){
		$B.=$value.',';
	}
	$B = substr($B,0,strlen($B)-1);
	$conC=$_GET['conC'];//内容C
	$de_json = json_decode($conC,TRUE);
	$C=null;
	foreach($de_json as $key=>$value){
		$C.=$value.',';
	}
	$C = substr($C,0,strlen($C)-1);
	$conD=$_GET['conD'];//内容D
	$de_json = json_decode($conD,TRUE);
	$D=null;
	foreach($de_json as $key=>$value){
		$D.=$value.',';
	}
	$D = substr($D,0,strlen($D)-1);
	// echo $B.'---'.$C.'---'.$D;
	// $title=$_GET['title'];
	if($id=='add'){
		$title=$_GET['title'];
		$sql="insert into ui_course_center (title,ui_title,small_title,ui_hour,conB,conC,conD) values('$title','$ui_title','$small_title','$ui_hour','$B','$C','$D')";
		$res=$conn->query($sql);
	}
	$sql="update  ui_course_center  set ui_title='$ui_title',small_title='$small_title',ui_hour='$ui_hour',conB='$B',conC='$C',conD='$D' where id='$id'" ;
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>