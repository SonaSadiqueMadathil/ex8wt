<?php

$con = new mysqli('localhost','root','','exp8');
    if($con->connect_error===true){
        die('Connection Failed'.$con->connect_error);
    }
    else{
        //echo "Connection Created";
    }
?>