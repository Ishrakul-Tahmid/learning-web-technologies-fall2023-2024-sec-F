<?php

    $currentPassword = $_REQUEST['currentPassword'];
    $newPassword = $_REQUEST['newPassword'];
    $retypeNewPassword = $_REQUEST['retypeNewPassword'];

    if($currentPassword =='')
    {
        echo "Current Password is required";
    }
    elseif($currentPassword == $newPassword)
    {
        echo 'New password is same as the current password';
    }
    elseif ($newPassword != $retypeNewPassword)
    {
        echo "Passwords do not match";
    }
    else
    {
        echo 'Password change successfully!!!';
    }

?>