<?php
    $location = $_REQUEST['location'];
    $date = $_REQUEST['pickupdate'];
    $gurdanerName = $_REQUEST['gurdanerName'];
    $gurdanerId = $_REQUEST['gurdanerId'];

    if($location=='' && $date=='' && $gurdanerName=='' && $gurdanerId=='')
    {
        echo 'You do not provide any information';
    }
    else{
        echo 'Thanks for providing the information.<br>We will send the gurdaner in due time at your location.';
    }
?>