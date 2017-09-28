<?php
    if (!isset($_GET["account"])) header("Location: iii01.php");

    $account = $_GET["account"];
    $passwd = $_GET["passwd"];
    if ($account == "bard" && $passwd == "123456"){
        echo "0";
    }else{
        echo "1";
    }
