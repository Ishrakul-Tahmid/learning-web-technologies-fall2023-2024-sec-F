<?php
    $dbhost = "localhost";
    $dbname = "labExam";
    $dbuser = "root";
    $dbpass = "";

    function getConnection()
    {
        global $dbhost;
        global $dbname;
        global $dbuser;
        global $dbpass;
        
        return $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    }
?>