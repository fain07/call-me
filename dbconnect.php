<?php

//连接数据库questionnaire
$db_host='mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/';
$db_user='admins535gLD';
$db_password='aTcej7Tj5PdF';
$db_name='php';
$connect=mysql_connect($db_host,$db_user,$db_password);
mysql_select_db($db_name,$connect);