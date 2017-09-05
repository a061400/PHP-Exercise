<?php
session_start();
$var1=12;
$var2=false;
$var3=array(1,2,3);

$_SESSION['var1'] = $var1;
$_SESSION['var2'] = $var2;
$_SESSION['var3'] = $var3;
?>

<a href="sunni51.php?var=<?php echo $var1;?>&var2=<?php echo $var2; ?>">sunni51</a>

