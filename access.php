<?php
// access.php
if (isset($_GET['file'])) {
    $fileId = $_GET['file'];
    
    // Simulate a file database (replace with your own database)
    $files = [
        1 => "files/file1.pdf",
        2 => "files/file2.pdf",
        3 => "files/file3.pdf",
        4 => "files/file4.pdf", // Add new files here
    ];
    
    if (array_key_exists($fileId, $files)) {
        $filePath = $files[$fileId];
        header("Content-Disposition: inline; filename=\"" . basename($filePath) . "\"");
        header("Content-Type: application/pdf");
        readfile($filePath);
        exit;
    } else {
        echo "File not found.";
    }
} else {
    echo "Invalid access.";
}
