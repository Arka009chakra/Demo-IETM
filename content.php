<?php
session_start();
include 'config.php';
$input = file_get_contents('php://input');
$data = json_decode($input, true);
$id = $data['id'];

$query = "SELECT description FROM content WHERE id='$id';";
$res = mysqli_query($conn, $query);

if ($row = mysqli_fetch_assoc($res)) { // Use mysqli_fetch_assoc for associative arrays
    echo $row['description']; // Correctly access the 'description' key
} else {
    echo "Content Not Found!!";
}
?>
