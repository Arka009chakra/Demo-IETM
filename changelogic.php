<?php
include 'config.php';
$input = file_get_contents('php://input');
$data = json_decode($input, true);
$username= $data['username'];
$password= $data['password'];
$query="SELECT psw FROM signup WHERE name LIKE '%$username%';";
$res=mysqli_query($conn,$query);
if($res)
{
    $hashpassword=password_hash($password,PASSWORD_DEFAULT);
    $query1="UPDATE `signup` SET `psw`='$hashpassword' WHERE name LIKE '%$username%';";
    $res1=mysqli_query($conn,$query1);
    if($res1)
    {
        echo "Update Successfully!!!!";
    }
    else{
        echo "Getting Error!!!!";
    }
}
?>