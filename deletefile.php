<?php
$dir = "C:/xampp/htdocs/Practice/upload";
$files = glob($dir."/*");

foreach($files as $file)
{
    if(file_exists($file))
    {
        // Check if it's a directory or a file
        if (is_dir($file)) {
            deleteDirectory($file); // Recursively delete directory and its contents
        } else {
            unlink($file); // Delete the file
        }
        echo "<script>alert('The file or directory was successfully deleted.');</script>";
    }
    else {
        echo "<script>alert('The specified file or directory does not exist.');</script>";
    }
}

// Function to delete directory and its contents recursively
function deleteDirectory($dir) {
    $files = glob($dir . "/*");
    foreach($files as $file) {
        if (is_dir($file)) {
            deleteDirectory($file); // Recursively delete subdirectory
        } else {
            unlink($file); // Delete file
        }
    }
    rmdir($dir); // Delete the now-empty directory
}
?>
