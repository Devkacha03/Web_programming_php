<?php

$connection = mysqli_connect("localhost", "root", "", "crudop") or die("connection error" . mysqli_connect_error());

if ($connection) {
    echo "<script> console.log('database connection ✅');</script>";
    // mysqli_query($connection, "DELETE FROM users_data");
} else {
    die(mysqli_connect_errno($connection));
}
