<?php

$connection = mysqli_connect('localhost', 'root', '', 'finaldb');
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}


if (isset($_REQUEST['submit'])) {
    $filename = $_FILES['file']['name'];
    $filetemnm = $_FILES['file']['tmp_name'];
    $dir = "uploads/";

    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    $filepath = $dir . basename($filename);

    if (move_uploaded_file($filetemnm, $filepath)) {

        $iq = "INSERT INTO filedata (filename, filepath) VALUES ('$filename', '$filepath')";
        if (mysqli_query($connection, $iq)) {
            echo "File uploaded and details saved successfully.";
        } else {
            echo "Failed to save file details in the database: " . mysqli_error($connection);
        }
    } else {
        echo "Failed to upload the file.";
    }
}

// Close the database connection
mysqli_close($connection);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" name="submit" value="upload">
    </form>


</body>

</html>