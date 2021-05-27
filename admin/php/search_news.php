<?php
    include('./public.php');
		$id=$_GET['id'];
				// 搜索新闻
				$sql="select * from news where id='$id'";
				$res=$conn->query($sql);
				$row=$res->fetch_assoc();
				$s=$row['title_img'];
				unset($row['title_img']);
				$row['title_img']=$s;
				$info['img']=$row['title_img'];//图片
				$vegetables = explode(',', $row['title_con']);
				unset($row['title_con']);
				$row['title_con']=$vegetables;
				$info['con']=$row['title_con'];//内容
				$info['small_title']=$row['small_title'];//小标题
				echo json_encode($info);
	
?>