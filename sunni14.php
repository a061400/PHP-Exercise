<?php


$a = array(1,2,3,4,5,6); //1
echo gettype($a);

echo '<hr>';

$b[0]=12;
echo gettype($b).':'.count($b);//2

echo '<hr>';

$c[]=12;
$c[]=12.333;
echo gettype($c).':'.count($c);//3

echo '<hr>';

$d['name']='brad';
$d['gender']=false;
$d['name']=51;
echo gettype($d).':'.count($d);//4


echo '<hr />';
$ary = array(1,2);
$ary[] = '123';
$ary[7] = 12.3;
$ary['name'] = 'brad';
var_dump($ary);




echo '<hr />';
foreach ($ary as $value){
    echo "{$key} ---> {$value}<br>";
}