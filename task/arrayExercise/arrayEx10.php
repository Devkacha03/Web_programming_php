<?php
$cities = [
    "Rajkot" => ["population" => 2097000, "area" => 170, "country" => "INDIA"],
    "Oslo" => ["population" => 717710, "area" => 454, "country" => "Norway"],
    "Berlin" => ["population" => 3640000, "area" => 1610, "country" => "Uae"]
];

foreach ($cities as $city => $info) {
    echo "City: $city\n";
    echo "Population: " . $info['population'] . "\n";
    echo "Area: " . $info['area'] . " km²\n";
    echo "Country: " . $info['country'];
    echo "<br>";
}
?>
