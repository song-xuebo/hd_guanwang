<?php
    include('./public.php');
    $user=$_GET['user'];
    $pass=$_GET['password'];
    $sql="select * from admin where user='$user' and password='$pass'";
    $res=$conn->query($sql);
    if($res->num_rows>0){
        echo 'ok';
    }else{
        echo 'no';
    }
?>