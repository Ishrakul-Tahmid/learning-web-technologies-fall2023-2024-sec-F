<?php

    session_start();
    $userid = $_REQUEST['userid'];
    $password = $_REQUEST['password'];

    if($userid == "" || $password == "" ){
    
        echo "null username or password!";
    
    }else{
        $status = login($userid, $password);
        
        if ($status){
            $_SESSION['flag'] = 'true';
            $usertepe = $_GET['usertype'];
            if($usertepe=="User")
            {
                header('location: ../view/user_home.php');
            }
            if($usertepe=="Admin")
            {
                header('location: ../view/admin_home.php');
            }
            
        }else{
            echo "invalid user!";
        }
    }
?>