<?php
$countries = [
    "USA" => "Washington, D.C.",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Germany" => "Berlin",
    "Italy" => "Rome"
];


ksort($countries);
echo "Countries sorted by keys:\n";
echo "<br>";
print_r($countries);
echo "<br>";

uasort($countries, function($a, $b) {
    return strcmp($b, $a);
});
echo "Capitals sorted by values (descending):\n";
print_r($countries);
?>
