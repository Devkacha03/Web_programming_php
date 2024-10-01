<?php
$students = [
    ["name" => "dev", "math" => 85, "science" => 90, "english" => 78],
    ["name" => "om", "math" => 92, "science" => 88, "english" => 84],
    ["name" => "rohan", "math" => 75, "science" => 82, "english" => 80]
];

foreach ($students as $student) {
    echo $student['name'] . "'s scores:\n";
    echo "Math: " . $student['math'] . "\n";
    echo "Science: " . $student['science'] . "\n";
    echo "English: " . $student['english'] . "\n";
    echo "<br>";
}
?>
