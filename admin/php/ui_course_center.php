<?php
// 课题大纲
    include('./public.php');
	// $id=$_GET['id'];
	$title=$_GET['title'];
		// if($id=='all'){
			// 全部信息
			$sql1="select * from ui_course_center where title='$title'";
			$res1=$conn->query($sql1);
			// $arr1=$res1->fetch_all();
			while ($row = $res1->fetch_assoc()) {
				$vegetables = explode(',', $row['conB']);
				unset($row['conB']);
				$row['conB']=$vegetables;
				$vegetables = explode(',', $row['conC']);
				unset($row['conC']);
				$row['conC']=$vegetables;
				$vegetables = explode(',', $row['conD']);
				unset($row['conD']);
				$row['conD']=$vegetables;
				$arrs []= $row;
			} 
			$myArray['data']= (object) array('big-title' =>$title.'课程大纲','all' =>$arrs); //将多个对象添加给一个数组给数组
			echo json_encode($myArray);
		// }else{
		// 	//相关条件
		// 	$sql="select * from ui_course_center where id='$id'";
		// 	$res=$conn->query($sql);
		// 	while($arr1=$res->fetch_assoc()){
		// 		$arrs= $arr1 ; //接受结果集
		// 	};
		// 	$vegetables = explode(',', $arrs['conA']);
		// 	unset($arrs['conA']);
		// 	$arrs['conA']=$vegetables;
		// 	$vegetables = explode(',', $arrs['conB']);
		// 	unset($arrs['conB']);
		// 	$arrs['conB']=$vegetables;
		// 	$vegetables = explode(',', $arrs['conC']);
		// 	unset($arrs['conC']);
		// 	$arrs['conC']=$vegetables;
		// 	$vegetables = explode(',', $arrs['conD']);
		// 	unset($arrs['conD']);
		// 	$arrs['conD']=$vegetables;
		// 	echo json_encode($arrs);
		// }
?>