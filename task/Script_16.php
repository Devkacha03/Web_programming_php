<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>script 16</title>
</head>

<body>
    <form action="#" method="POST">
        <input type="text" name="uInput" placeholder="Enter Information">
        <input type="submit" value="submit">
    </form>
</body>

</html>

<?php

$sentence = $_POST['uInput'];
$vowel = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$count = 0;
if (isset($sentence) && !empty($sentence)) {
    // Define vowels

    // Convert string to array
    $sentence_array = str_split($sentence);

    // Loop through each character
    foreach ($sentence_array as $char) {
        if (in_array($char, $vowel)) {
            $count++;
        }
    }

    echo "<p>The number of vowels in the sentence is: " . $count . "</p>";
} else {
    echo "<p>Please enter a valid sentence.</p>";
}

?>