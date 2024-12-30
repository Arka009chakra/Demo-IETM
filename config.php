<?php
$servername="localhost";
$username="root";
$password="";
$database="practice";

$conn=mysqli_connect($servername,$username,$password,$database);
if($conn)
{
    // echo "Connection Successfull!!!";
}
else{
    // echo "Connection Failed!!!!";
}
?>