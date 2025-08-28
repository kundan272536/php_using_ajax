<?php
$con=mysqli_connect("localhost","root","","ajax_db");
if(!$con){
    die("Database connection failed: " . mysqli_connect_error());
}
?>