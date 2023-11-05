<?php
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $nameFlag = true;
    $passwordFlag = true;

    if(strlen($username<2))
    {
        $nameFlag = false;
        echo 'username must contain at least 2 character';
    }

    for($i = 0; $i < strlen($username) ; $i++)
    {
        if(!(ord($username[$i])>=65 && ord($username[$i])<=90) && !(ord($username[$i])>=97 && ord($username[$i])<=122) && $username[$i] !='_' && $username[$i] !='.' && $username[$i] !='-')
        {
            $nameFlag = false;
            echo 'User Name can contain alpha numeric characters, period, dash or underscore only';
            break;
        }
    }

    if(strlen($password) < 8){
        $passwordFlag = false;
        echo ' Password must not be less than eight (8) characters <br>';
    }
    if(!str_contains($password, '@') && !str_contains($password, '#') && !str_contains($password, '$') && !str_contains($password, '%')){
        $passwordFlag = false;
        echo 'Password must contain at least one of the special character (@, #, $, %) <br>';
    }

    if($nameFlag && $passwordFlag)
    {
        echo "Username and password are valid";
    }
    else
    {
        echo "Invalid username/password";
    }



?>