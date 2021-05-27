<?php
    include('./public.php');
				// 学员实训结果保障 如：实训结果保障、传智学员实训结果保障
				$sql="select * from practicals";
				$res=$conn->query($sql);
				while ($row = $res->fetch_assoc()){
					$img=$row['img'];
					unset($row['img']);
					$row['img']=$img;
					$vegetables = explode(',', $row['content']);
					unset($row['content']);
					$row['content']=$vegetables;
					// echo $row;
					$arr []=$row;
				}
					echo json_encode($arr);
	
?>