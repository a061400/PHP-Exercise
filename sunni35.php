<?php


        $rate=$_GET['rate'];

        //1.創畫布(1.空白2.既有圖)

        $img= imagecreate(400,80);



        //2.開始畫


        $yellow =  imagecolorallocate($img, 255,255,0);
        imagefilledrectangle($img,0,0,400,80,$yellow);

        $red =  imagecolorallocate($img, 255,0,0);
        imagefilledrectangle($img,0,0,(int)(400*$rate/100),80,$red);



        //3.記憶體 輸出(1.畫面)

        header("Content-type:image/jpeg");
        imagejpeg($img);






        //4.清除記憶體
        imagedestroy($img);




