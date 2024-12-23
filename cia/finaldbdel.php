<?php
$delete_id = $_GET['deid'];


$connect = mysqli_connect('localhost', 'root', '', 'finaldb');
$count = 0;
if (!$connect) {
    echo "<script>console.log('not connected');</script>";
} else {
    $d_i = "DELETE FROM student WHERE ID='$delete_id'";
    $check_d = mysqli_query($connect, $d_i);
    if ($check_d) {
        header('Location: finaldbdis.php');
        exit;
    }
}
