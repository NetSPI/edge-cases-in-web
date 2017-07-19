<?php
    $real_password = "pink"; 
    $user_password = array("password" => $_REQUEST['password']);

    if(strcmp($real_password, $user_password == 0)){
        echo "Authentication Successful";
    }else{
        echo "Authentication Failed";
    }
?>