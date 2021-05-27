<?php
	include('./public.php');
	// 获取文件夹里的所有文件名
	function searchDir($path,&$data){
	 if(is_dir($path)){
	 $dp=dir($path);
	 while($file=$dp->read()){
	 if($file!='.'&& $file!='..'){
	 searchDir($path.'/'.$file,$data);
	 }
	 }
	 $dp->close();
	 }
	 if(is_file($path)){
	 $data[]=$path;
	 }
	 }
	function getDir($dir){
	 $data=array();
	 searchDir($dir,$data);
	 return $data;
	 }
	 $arr=null;
	 $list=getDir('images');
	  for($i=0;$i<count($list);$i++)
	  {
	  $arr.=$list[$i].',';//截取字符串
	  }
	  $newarr = substr($arr,0,strlen($arr)-1);
	  $arrs= explode(',',$newarr);
	  echo  json_encode($arrs);
?>