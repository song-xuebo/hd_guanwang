<?php
// 课题大纲
    include('./public.php');
	//传递一个唯一标识 如Java大数据 ...
	$id=$_GET['id'];
		if($id=='all'){
			// 全部信息
			$sql1="select * from course_outline";
			$res1=$conn->query($sql1);
			// $arr1=$res1->fetch_all();
			while ($row = $res1->fetch_assoc()) {
				$vegetables = explode(',', $row['bodyItem']);
				unset($row['bodyItem']);
				$row['bodyItem']=$vegetables;
				$arrs []= $row;
				
			} echo json_encode($arrs);
		}else{
			//相关条件
			$sql="select * from course_outline where id='$id'";
			$res=$conn->query($sql);
			while($arr1=$res->fetch_assoc()){
				$arrs= $arr1 ; //接受结果集
			};
			$vegetables = explode(',', $arrs['bodyItem']);
			unset($arrs['bodyItem']);
			$arrs['bodyItem']=$vegetables;
			echo json_encode($arrs);
		}
?>