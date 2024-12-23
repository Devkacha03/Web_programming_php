<?php

$connect = mysqli_connect('localhost', 'root', '', 'finaldb');
$count = 0;
if (!$connect) {
    echo "<script>console.log('not connected');</script>";
} else {
    echo "<script>console.log('connected');</script>";

    $s_q = "SELECT *FROM student";
    $s_qc = mysqli_query($connect, $s_q);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY PAGE</title>
</head>

<body>
    <?php if (mysqli_num_rows($s_qc) > 0) { ?>
        <table border="1">
            <tr>
                <td>id</td>
                <td>name</td>
                <td>city</td>
                <td>Action</td>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($s_qc)) {
                $count++; ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><a href="finaldbup.php?upid=<?php echo $row['id']; ?>">update</a> / <a href="finaldbdel.php?deid=<?php echo $row['id']; ?>">delete</a></td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <h1>Records not found</h1>
    <?php } ?>
</body>

</html>