<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        <input type="number" name="val1" id="val1" placeholder="value 1"><input type="number" name="val2" id="val2" placeholder="value 2"><input type="number" name="val3" id="val3" placeholder="value 3">
        <br>
        <input type="submit">
    </form>
</body>

</html>

<?php
$val1 = $_REQUEST['val1'];
$val2 = $_REQUEST['val2'];
$val3 = $_REQUEST['val3'];
$num_array = [$val1, $val2, $val3];
print_r(max($num_array));
?>