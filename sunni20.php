<?php

 if (isset($_REQUEST['account'])){   //REQUEST post 與 get 都會傳送表單資料
     $account = $_REQUEST['account'];
     $passwd = $_REQUEST['passwd'];
     echo "{$account} : {$passwd}";

     $like = $_REQUEST['like'];
     foreach ($like as $k => $v){
         echo "{$k} : {$v}<br>";
     }


}





