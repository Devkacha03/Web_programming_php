<?php

$connect = mysqli_connect('localhost', 'root', '', 'finaldb');
if (!$connect) {
    echo "<script>console.log('not connected');</script>";
} else {
    echo "<script>console.log('connected');</script>";

    if (isset($_REQUEST['submit'])) {

        $nm = trim($_REQUEST['nm']);
        $ct = trim($_REQUEST['ct']);

        if (empty($nm) || empty($ct)) {
            echo "<script>alert('All field are Required...')</script>";
        } else {
            $i_q = "INSERT INTO student(name,city) VALUES('$nm','$ct')";
            $ch_q = mysqli_query($connect, $i_q);
            if ($ch_q) {
                echo "<script>alert('Record Are Inserted.');</script>";
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
    <title>Insert data</title>
    <script>
        function subclick(event) {
            let len = document.querySelector('#nms').textContent.trim().length;
            if (nameLength === 0) {
                alert('Name field is required.');
                event.preventDefault(); // Prevent form submission
            } else {
                alert(`The length of the name is: ${nameLength}`);
            }
        }
    </script>
</head>

<body>
    <form method="post" onsubmit="subclick(event)">
        <table cellspacing="10">
            <tr>
                <td>Name: </td>
                <td><input type="text" placeholder="Enter Name" name="nm" id="nms"></td>
            </tr>
            <tr>
                <td>City: </td>
                <td><input type="text" placeholder="Enter City" name="ct"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>

</body>

</html>