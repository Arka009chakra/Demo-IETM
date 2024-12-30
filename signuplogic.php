<?php
include 'config.php';
$input = file_get_contents('php://input');
$data = json_decode($input, true);
$username= $data['username'];
$password= $data['password'];
$hashpassword = password_hash($password,PASSWORD_DEFAULT);
$query="INSERT INTO signup (name,psw) VALUES ('$username','$hashpassword');";
$res=mysqli_query($conn,$query);
if($res)
{
    echo "Successfully Created User !!!!!!!!!";
}
else{
    echo "Failed To Create User !!!!!!!!!";
}
?>