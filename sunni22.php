<?php
if (!isset($_REQUEST['account']))
    header("Location: sunni19.php?error=2");
$account = $_REQUEST['account'];
echo $account;