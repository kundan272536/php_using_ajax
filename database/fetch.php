<?php
include('./connection.php');
$query="SELECT * FROM users";
$data=mysqli_query($con,$query);
$users = [];

if(!$data){
    echo "error ".mysqli_error($con);
}
if(mysqli_num_rows($data) > 0){
    while($row = mysqli_fetch_assoc($data)){
        $users[]= $row;
    }
    header('Content-Type: application/json');
    echo json_encode($users);

} else {
    echo "No records found!";
}
?>