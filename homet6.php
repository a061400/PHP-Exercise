<?php
$score=rand(0,100);
echo "Score:$score<br>";


if($score>89){
    echo  "評分:A";
}else{
    if($score>79) {
        echo "評分:B";
    }else{
        if($score>69){
            echo "評分:C";
        }else{
            echo "shit";
        }
    }
}






