<?php

include 'connect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    echo $id;

    $delete_query = "DELETE FROM users_data WHERE id=$id";
    $delete_execute = mysqli_query($connection, $delete_query);

    if (!$delete_execute) {
        echo "user not delete";
    } else {
        header("Location:display.php");
    }
}
