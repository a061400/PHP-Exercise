<?php

    $mysqli = new mysqli('localhost',
        'root',
        'root');

    if ($mysqli->connect_error){
        die($mysqli->connect_error);
    }

    $ret = $mysqli->query("CREATE DATABASE test4");
    var_dump($ret);

