<?php
    include('./public.php');
	// 辉达动态
		$sql1="select * from dynamic";
		$res1=$conn->query($sql1);
		while ($row = $res1->fetch_assoc()){
			
			$s=$row['img'];
			unset($row['img']);
			// echo $s;
			// $s = substr($s,0,strlen($s)-1);
			$row['img']=$s;
			$arrs []= $row;
		};
		// echo json_encode($arrs);
		// $str=array("mes"=>array($arrs[0]['mesA'],$arrs[0]['mesB'],$arrs[0]['mesC']));
		forEach($arrs as $key=>$value){
			$arrs[$key]['mesArr']=array((object)['mesTitle' => $arrs[$key]['mesA'],'mesCon' =>$arrs[$key]['conA']],
			(object)['mesTitle' => $arrs[$key]['mesB'],'mesCon' =>$arrs[$key]['conB']],
			(object)['mesTitle' => $arrs[$key]['mesC'],'mesCon' =>$arrs[$key]['conC']]);
			unset($arrs[$key]['mesA']);
			unset($arrs[$key]['mesB']);
			unset($arrs[$key]['mesC']);
			unset($arrs[$key]['conA']);
			unset($arrs[$key]['conB']);
			unset($arrs[$key]['conC']);
			// print_r($str);
		};
		rsort($arrs);
		echo json_encode($arrs);
?>