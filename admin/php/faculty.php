<?php
    include('./public.php');
	// 师资力量
		$sql1="select * from facultys";
		$res1=$conn->query($sql1);
		// $arr1=$res1->fetch_all();
		while ($row = $res1->fetch_assoc()){
			$s=$row['img'];
			unset($row['img']);
			// echo $s;
			// $s = substr($s,0,strlen($s)-1);
			$row['img']=$s;
			$arrs []= $row;
		};
		echo json_encode($arrs);
?>