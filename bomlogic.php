<?php
include 'config.php';

function getChild($conn, $parentId)
{
    $query = "SELECT id, name FROM bom WHERE parentid = '$parentId';";
    $result = mysqli_query($conn, $query);
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
       
        echo "<details>";
        echo "<summary onclick='showContent({$row['id']})' class='highlight' data-id='{$row['id']}'>{$row['name']}</summary>";
        
        // Recursive call to fetch children
        getChild($conn, $row['id']);

        echo "</details>";
       
    }
    echo "</ul>";
}

// Fetch and display top-level items
$query = "SELECT id, name FROM bom WHERE parentid = '0';";
$result = mysqli_query($conn, $query);
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
   
    echo "<details>";
    echo "<summary onclick='showContent({$row['id']})' class='highlight' data-id='{$row['id']}'>{$row['name']}</summary>";

    // Fetch and display children
    getChild($conn, $row['id']);

    echo "</details>";
   
}
echo "</ul>";
?>
