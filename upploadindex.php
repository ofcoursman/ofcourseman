<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload File" name="submit">
    </form>

    <h2>Files Stored</h2>
    <ul>
        <?php
        // Specify the directory where uploaded files are stored
        $uploadDirectory = 'uploads/';
        
        // Get list of files in the directory
        $files = glob($uploadDirectory . '*');
        
        // Iterate through the files and display them
        foreach($files as $file) {
            // Get the file name
            $fileName = basename($file);
            echo "<li>$fileName</li>";
        }
        ?>
    </ul>

</body>
</html>