<?php
    include('./public.php');
	// 校园环境
		$name=$_GET['name'];
		// 全部信息
		if($name=='all'){
			$sql1="select * from environment";
			$res1=$conn->query($sql1);
			// $arr1=$res1->fetch_all();
			while ($row = $res1->fetch_assoc()) {
				$vegetables = explode(',', $row['img']);
				unset($row['img']);
				$row['img']=$vegetables;
				$s=null;
				foreach($row['img'] as $value){
					$s.=$value.',';
				}
				$s = substr($s,0,strlen($s)-1);
				$s = explode(',',$s);
				$row['img']=$s;
				$arrs []= $row;
			} 
			echo json_encode($arrs);
		}else{
			// 相关条件
			$sql="select * from environment where name='$name'";
			$res=$conn->query($sql);
			while($arr1=$res->fetch_assoc()){
				$arrs= $arr1 ; //接受结果集
			};
			$vegetables = explode(',', $arrs['img']);
			unset($arrs['img']);
			$arrs['img']=$vegetables;
			$s=null;
			foreach($arrs['img'] as $value){
				$s.=$value.',';
			}
			$s = substr($s,0,strlen($s)-1);
			$s = explode(',',$s);
			$arrs['img']=$s;
			echo json_encode($arrs);
		}		
?>