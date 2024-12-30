<?php
session_start();
include 'config.php';
$input = file_get_contents('php://input');
$data = json_decode($input, true);
$username= $data['username'];
$password= $data['password'];
$query="SELECT psw FROM signup WHERE name LIKE '%$username%';";
$res=mysqli_query($conn,$query);
if($res)
{
    if($row=mysqli_fetch_array($res))
    {
        if(password_verify($password,$row['psw']))
        {
            $_SESSION['username'] = $username;
            echo "Login Successful!";
        }
        else
        {
            echo "Login Failed !!!!!";
        }
    }
}
?>