<?php
session_start();
include 'config.php';
$input = file_get_contents('php://input');
$data = json_decode($input, true);
$id = isset($data['value']) ? $data['value'] : '';
$query = "SELECT id FROM content WHERE description LIKE '%$id%';";
$res = mysqli_query($conn, $query);
$result = [];
while ($row = mysqli_fetch_assoc($res)) {
    $result[] = $row['id'];
}
echo json_encode($result);
?>
