<?php
    include('./public.php');
	$id=$_GET['id'];
	//背景轮播图
		if($id==6){
			// 全部信息
			$sql1="select * from banners";
			$res1=$conn->query($sql1);
			// $arr1=$res1->fetch_all();
			while ($row = $res1->fetch_assoc()) {
				// if($row['imgUrls']!=null){
					$vegetables = explode(',', $row['imgUrls']);
					unset($row['imgUrls']);
					$row['imgUrls']=$vegetables;
					$s=null;
					foreach($row['imgUrls'] as $value){
						$s.=$value.',';
					}
					$s = substr($s,0,strlen($s)-1);
					$s = explode(',',$s);
					$row['imgUrls']=$s;
					$arrs []= $row;
				// }
			} 
			echo json_encode($arrs);
		}else{
			// 相关条件
			$sql="select * from banners where id='$id'";
			$res=$conn->query($sql);
			while($arr1=$res->fetch_assoc()){
				$arrs= $arr1 ; //接受结果集
			}
			// if($arrs['imgUrls']!=null){
			$vegetables = explode(',', $arrs['imgUrls']);
			unset($arrs['bodyItem']);
			$arrs['imgUrls']=$vegetables;
			$s=null;
			foreach($arrs['imgUrls'] as $value){
				$s.=$value.',';
			}
			$s = substr($s,0,strlen($s)-1);
			$s = explode(',',$s);
			$arrs['imgUrls']=$s;
			echo json_encode($arrs);
		// }		
	}
?>