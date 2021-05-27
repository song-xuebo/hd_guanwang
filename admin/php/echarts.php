<?php
    include('./public.php');
	$sql="select * from echarts";
	$res=$conn->query($sql);
	while ($row = $res->fetch_assoc()) {
		$s=$row['baseImg'];
		unset($row['baseImg']);
		// echo $s;
		// $s = substr($s,0,strlen($s)-1);
		$row['baseImg']=$s;
		$arrs []= $row;
	}
	echo json_encode($arrs);
?>