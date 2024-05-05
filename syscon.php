<?php
$hostname_conn = "localhost";
$database_conn = "project";
$username_conn = "root";
$password_conn = "";
$con = mysqli_connect($hostname_conn, $username_conn, $password_conn);
mysqli_select_db($con, $database_conn);

 
?>