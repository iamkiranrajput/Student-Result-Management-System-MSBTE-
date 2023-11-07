<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$conn=mysqli_connect($db_host,$db_user,$db_pass)or die("SERVER DOWN");
// $sql="CREATE DATABASE form";

    $db_name="form";
    $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    if(!$conn)
    {
        echo" Database not connected";
    
    }


?>