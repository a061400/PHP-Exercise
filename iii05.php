<?php
    $upload = $_FILES['upload'];
    if ($upload['error'] == 0 ){
        copy($upload['tmp_name'],"./upload2/{$upload['name']}");
    }