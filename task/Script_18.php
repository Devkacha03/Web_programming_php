<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>script_18.php</title>
</head>

<body>
    <form action="#" method="post">
        <input type="number" name="num" placeholder="enter number" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
        <input type="submit" value="submit">
    </form>
</body>

</html>
<?php
$randomNumber = rand(1, 10);
// echo $randomNumber;

// Check if the form is submitted and the input is provided
if (isset($_POST['num']) && !empty($_POST['num'])) {
    $uNumber = intval($_POST['num']); // Ensure it's an integer

    if ($uNumber >= 1 && $uNumber <= 10) {
        if ($randomNumber == $uNumber) {
            echo "Number matched! You guessed correctly.";
        } else {
            echo "Number not matched";
            // The random number was: " . $randomNumber;
        }
    } else {
        echo "Please enter a number between 1 and 10.";
    }
} else {
    echo "Please enter a number.";
}

?>