<?php
    $str1 = $_REQUEST['password'];
    $str2 = "0e123456789012345678901234567890";

    if($str1 == $str2){
        echo "Authentication Successful";
    }else{
        echo "Authentication Failed";
    }
?>