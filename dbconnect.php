<?php

//连接数据库questionnaire
$db_host='localhost';
$db_user='root';
$db_password='';
$db_name='mycall';
$connect=mysql_connect($db_host,$db_user,$db_password);
mysql_select_db($db_name,$co