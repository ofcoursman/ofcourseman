<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
// Specify the directory where uploaded files will be saved
$uploadDirectory = 'uploads/';

// Check if the form was submitted
if(isset($_POST['submit'])) {
    // Check if there was an error uploading the file
    if($_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // Get the temporary location of the uploaded file
        $tempFile = $_FILES['file']['tmp_name'];
        
        // Get the original name of the uploaded file
        $fileName = $_FILES['file']['name'];

        // Move the file from the temporary location to the specified directory
        if(move_uploaded_file($tempFile, $uploadDirectory . $fileName)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Error: " . $_FILES['file']['error'];
    }
}
?>
<button><a href="index.php">spat</a></button>
</body>
</html>