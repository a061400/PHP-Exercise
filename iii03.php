<?php
if (!isset($_POST["account"])) header("Location: iii01.php");

$account = $_POST["account"];
$passwd = $_POST["passwd"];
if ($account == "brad" && $passwd == "123456"){
    echo "0";
}else{
    echo "1";
}