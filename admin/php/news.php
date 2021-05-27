<?php
    include('./public.php');
				// 新闻
				$sql="select * from news where big_title='学科资讯'";
				$res=$conn->query($sql);
				while($row=$res->fetch_assoc()){
					$titleObj['titles']=$row['small_title'];
					$s='./php/images/'.$row['title_img'];
					unset($row['title_img']);
					// echo $s;
					// $s = substr($s,0,strlen($s)-1);
					$row['title_img']=$s;
					$vegetables = explode(',', $row['title_con']);
					unset($row['title_con']);
					$row['title_con']=$vegetables;
					$titleObj['titles_img']=$row['title_img'];
					$titleObj['title_con']=$row['title_con'];
					
					unset($row['big_title']);
					$titleObj []= $row;
				}
				unset($titleObj['titles']);
				unset($titleObj['titles_img']);
				unset($titleObj['title_con']);
				$myArray['data1']= (object) array('big_title'=>'学科资讯','all' =>array_reverse($titleObj)); //将多个对象添加给一个数组给数组
				$sql1="select * from news where big_title='技术文章'";
				$res1=$conn->query($sql1);
				while($row=$res1->fetch_assoc()){
					$titleObj1['titles']=$row['small_title'];
					$s='./php/images/'.$row['title_img'];
					unset($row['title_img']);
					// echo $s;
					// $s = substr($s,0,strlen($s)-1);
					$row['title_img']=$s;
					$titleObj1['titles_img']=$row['title_img'];
					$vegetables = explode(',', $row['title_con']);
					unset($row['title_con']);
					$row['title_con']=$vegetables;
					$titleObj1['title_con']=$row['title_con'];
					unset($row['big_title']);
					$titleObj1 []= $row;
				}	
				unset($titleObj1['titles']);
				unset($titleObj1['titles_img']);
				unset($titleObj1['title_con']);
				$myArray['data2']= (object) array('big_title'=>'技术文章','all' =>array_reverse($titleObj1));
				
				$sql2="select * from news where big_title='常见问题'";
				$res2=$conn->query($sql2);
				while($row=$res2->fetch_assoc()){
					$titleObj2['titles']=$row['small_title'];
					$s='./php/images/'.$row['title_img'];
					unset($row['title_img']);
					// echo $s;
					// $s = substr($s,0,strlen($s)-1);
					$row['title_img']=$s;
					$titleObj2['titles_img']=$row['title_img'];
					$vegetables = explode(',', $row['title_con']);
					unset($row['title_con']);
					$row['title_con']=$vegetables;
					$titleObj2['title_con']=$row['title_con'];
					unset($row['big_title']);
					$titleObj2 []= $row;
				}
				unset($titleObj2['titles']);
				unset($titleObj2['titles_img']);
				unset($titleObj2['title_con']);
				$myArray['data3']= (object) array('big_title'=>'常见问题','all' =>array_reverse($titleObj2));
				$myArrs[]=(object) array('news' =>$myArray);
				echo json_encode($myArray);
?>