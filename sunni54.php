<?php

$mysqli = @new mysqli('localhost',
    'root',
    'root',
    'iii');
//
//$sql = "insert into member (account,passwd,realname)".
//    "values ('brad','123','Brad')";


//$sql = "delete from member where id=2";

$sql = "update member set account='tony', passwd='321' where id=1";
$ret = $mysqli->query($sql);
//var_dump($ret);      //印出true false
echo $mysqli->affected_rows; //修改的行數