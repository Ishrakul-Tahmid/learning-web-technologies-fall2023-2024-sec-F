<?php 
    session_start();
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
    $name = $_REQUEST['name'];
    $usertype = $_REQUEST['usertype'];

    if($id == "" || $password == ""){
        echo "null username or password or email!";
    }else{
        $user = ['id'=> $id, 'password'=> $password, 'name'=>$name, 'usertype'=>$usertype];
        $_SESSION['user'] = $user;
        header('location: ../view/login.html');
    }
?>