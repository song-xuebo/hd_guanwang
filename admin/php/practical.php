<?php
    include('./public.php');
				// 学员实训结果保障
				$sql="select * from practical";
				$res=$conn->query($sql);
				while ($row = $res->fetch_assoc()) {
					$img='http://localhost/hd_guanwang/admin/php/images/'.$row['img'];
					unset($row['img']);
					$row['img']=$img;
					
					$arr []=$row;
					
				}
					
					
				echo json_encode($arr);
	
?>