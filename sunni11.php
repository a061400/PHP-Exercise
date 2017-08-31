<?php

$month = rand(1,12);

switch ($month){
    case 2:
        echo '28天<br>';
        break;
    case 1: case 3: case 5: case 7: case 8: case 10:case 12:
         echo '31天<br>';
         break;

    case 4: case 6: case 9: case 11:
        echo '30天<br>';
        break;


}
echo "月份:$month"."月";