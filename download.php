<?php
// Check if the file parameter is set and not empty
if(isset($_POST['file']) && !empty($_POST['file'])){
    // Get the file name from the form data
    $filename = $_POST['file'];
   
    // Set headers for file download
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($filename).'"');
    header('Content-Length: ' . filesize($filename));

    // Read the file and output its contents
    readfile($filename);
    exit;
} else {
    // File parameter not set or empty
    echo "Invalid request.";
}
?>