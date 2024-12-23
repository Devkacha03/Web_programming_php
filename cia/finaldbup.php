<?php
$connect = mysqli_connect('localhost', 'root', '', 'finaldb');
$count = 0;
$uid = $_GET['upid'];
if (!$connect) {
    echo "<script>console.log('not connected');</script>";
} else {
    echo "<script>console.log('connected');</script>";

    $s_q = "SELECT *FROM student WHERE ID='$uid'";
    $s_ch = mysqli_query($connect, $s_q);
    $row = mysqli_fetch_assoc($s_ch);


    if (isset($_REQUEST['submit'])) {

        $nm = trim($_REQUEST['nm']);
        $ct = trim($_REQUEST['ct']);

        if (empty($nm) || empty($ct)) {
            echo "<script>alert('All field are Required...')</script>";
        } else {
            $i_q = "UPDATE student SET name='$nm',city='$ct' WHERE id='$uid'";
            $ch_q = mysqli_query($connect, $i_q);
            if ($ch_q) {
                echo "<script>alert('Record Are updated.');</script>";
                echo "<script>document.location='finaldbdis.php';</script>";
                exit;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>
    <form method="post">
        <table cellspacing="10">
            <tr>
                <td>Name: </td>
                <td><input type="text" placeholder="Enter Name" name="nm" value="<?php echo $row['name']; ?>"></td>
            </tr>
            <tr>
                <td>City: </td>
                <td><input type="text" placeholder="Enter City" name="ct" value="<?php echo $row['city']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="update"></td>
            </tr>
        </table>
</body>

</html>