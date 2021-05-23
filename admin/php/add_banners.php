<?php
    include('./public.php');
				$names=$_GET['name'];//查询的条件
				$imgUrls=$_GET['imgUrls']; //接收到替换的地址
				$sql="select * from banners where name='$names'";
				$res=$conn->query($sql);
				$arr=$res->fetch_assoc();
				if($arr['imgUrls']==null || $imgUrls==null){
					$imgUrls=$imgUrls;
				}
				$sql="update banners set imgUrls='$imgUrls' where name='$names'";
				$res=$conn->query($sql);
				if($res){
					echo "ok";
				}else{
					echo 'no';
				}
				// 删除文件夹的名字
				// $arrs=explode(',',$imgUrls);
				// foreach($arrs as $val){
				// 	 unlink('./images/'.$val);
				//  };
				// unlink('./images/'.$imgUrls);//删除图片
				
	
?>