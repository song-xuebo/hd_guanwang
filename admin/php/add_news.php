<?php
// 修改课题大纲
    include('./public.php');
	$id=$_GET['id']; //查询的id
	$small_title=$_GET['small_title'];//小标题
	$img=$_GET['title_img'];//图片
	$title_con=$_GET['title_con'];//内容
	$de_json = json_decode($title_con,TRUE);
	$B=null;
	foreach($de_json as $key=>$value){
		$B.=$value.',';
	}
	$B = substr($B,0,strlen($B)-1);//查询的数组 
	if($id=='add'){//添加的话
		$title=$_GET['title'];//传递过来的技术文章 //插入数据
		$sql="insert into news (big_title,small_title,title_img,title_con) values('$title','$small_title','$img','$B')";
		$res=$conn->query($sql);
	}
	$sql="update news set small_title='$small_title',title_img='$img',title_con='$B' where id='$id'";
	$res=$conn->query($sql);
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
?>