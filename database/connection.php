<?php
$con=mysqli_connect("localhost","root","","ajax_db");
if($con){
    echo "Data base connected successfully!";
}
else{
    echo "Connection failed: " . mysqli_connect_error();
}
?>