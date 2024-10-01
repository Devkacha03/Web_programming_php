<?php
$fruits = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];

sort($fruits);
echo "Fruits sorted in ascending order:\n";
print_r($fruits);

rsort($fruits);
echo "Fruits sorted in descending order:\n";
print_r($fruits);
?>
