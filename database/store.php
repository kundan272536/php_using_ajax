<?php
include('connection.php');
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$mobno=$_POST['mobile_no'];
$password=$_POST['password'];
$query="INSERT INTO users (first_name,last_name,email,mobile_no,password) VALUES ('$fname','$lname','$email','$mobno','$password')";
$data=mysqli_query($con,$query);
if($data){
    $id=mysqli_insert_id($con);
   header('Content-Type: application/json');
   echo json_encode([
    'id'=>$id,
    'first_name'=>$fname,
    'last_name'=>$lname,
    'email'=>$email,
    'mobile_no'=>$mobno,
   ]);
}
else{
    echo json_encode(['error'=>mysqli_error($con)]);
}
?>