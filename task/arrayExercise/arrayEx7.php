<?php
$countries = [
    "USA" => "Washington, D.C.",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Germany" => "Berlin",
    "Italy" => "Rome"
];

$countries["Canada"] = "Ottawa"; 
$countries["Germany"] = "Berlin (Updated)"; 

foreach ($countries as $country => $capital) {
    echo "$country - $capital\n";
    echo "<br>";
}
?>
