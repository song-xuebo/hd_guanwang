<?php
	include('./public.php');
			if(isset($_POST['sub'])){
				$file=$_FILES['file'];//以传递过来的图片路径
				// echo $name.$file;
				    if(is_uploaded_file($file['tmp_name'])){//$file['tmp_name'] 临时路径
					function get_password( $length = 8 )
					{
					    $str = substr(md5(time()), 0, $length);//md5加密，time()当前时间戳
					    return $str;
					}
				        //路径
				        $path='./images/'.get_password().$file['name'];
				        move_uploaded_file($file['tmp_name'],$path);
						if($path){
							echo "<script>alert('图片上传成功');history.go(-1);</script>";
							
						}else{
							echo "<script>alert('图片上传失败')</script>";
						}
				}
				
			}
			
?>