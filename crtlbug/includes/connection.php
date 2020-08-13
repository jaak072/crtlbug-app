<?php

//host, username, password, and database name
$host= "127.0.0.1";
$username= "root";
$password= "";
$dbname= "manager";

//make an connection with the data base
$con = mysqli_connect( "127.0.0.1", "root", "", "manager")
or die(mysqli_error($con));

//start the session
session_start();

?>