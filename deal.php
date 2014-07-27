<?php
require_once "dbconnect.php";
$username=utf8_encode($_POST['call_key']);
$userphone=$_POST['mobile_key'];
//echo $username.'-'.$userphone;
//die();
$getnamesql="select * from `call` where name='$username';";
$result1=mysql_query($getnamesql);
$row1=mysql_fetch_array($result1);
if(!$row1){
        $format=date("YmdHis",time());
        $insertsql="insert into `call` (id,name,phone) values ('$format','$username','$userphone')";
        $result2=mysql_query($insertsql);
        //echo $insertsql;
        //die();
}else{
        $userid=$row1['id'];
        $updatesql="update `call` set name='$username' , phone='$userphone' where id='$userid';";
        $result3=mysql_query($updatesql);

}
header("Location:index.php");

