<?php
if (isset($_POST['upload'])) { // Corrected the isset syntax
    $zipfile = $_FILES['zip_file']['tmp_name']; // Access the correct property for the uploaded file
    $targetdir = 'upload/';
    $zip = new ZipArchive;

    if ($zip->open($zipfile) === TRUE) { // Ensure $zipfile references the temporary uploaded file
        $zip->extractTo($targetdir);
        $zip->close(); // Close the ZipArchive to free resources
        echo "<script>alert('Successful');</script>";
        header("Location:bomui.php");
    } else {
        echo "<script>alert('Failed to open ZIP file.');</script>";
    }
}
?>
