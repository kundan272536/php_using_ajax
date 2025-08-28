<?php
include('connection.php');
$id=intval($_GET['id']);
$query="DELETE FROM users WHERE id='$id'";
$data=mysqli_query($con,$query);
if($data){
    echo "Users deleted successfully!";
}
else{
    echo "error ".mysqli_error($con);
}
?>