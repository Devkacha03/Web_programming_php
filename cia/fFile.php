<?php
//arrray example
$cars = array('audi', 10, 'bmw');
// echo implode(",", $cars);
print_r($cars);
echo $cars[0] = 'tata';
print_r($cars);

echo count($cars);
for ($i = 0; $i < count($cars); $i++) {
    echo "<br>" . $cars[$i];
}

foreach ($cars as $val) {
    echo "<br>" . $val;
}

//associative array
$emp_data = array(
    "name" => "dev kacha",
    "city" => "earth",
    "country" => "universe",
    "home" => array("black hole", 'stars', 'jupiter')
);

$emp_data['mobile'] = '100 101 102 108';

foreach ($emp_data as $key => $val) {
    if (is_array($val)) {
        echo "<br> $key : " . implode(", ", $val);
    } else {
        echo "<br> $key : $val";
    }
}

echo $emp_data['city'];
print_r($emp_data['home']);

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo "<br>";
foreach ($matrix as $key) {
    echo "<br>";
    foreach ($key as $val) {

        print_r($val);
    }
}
// echo $matrix[1][1];

echo "<br>";
$student = array('B', 'A', 'T');
sort($student);
print_r($student);

foreach ($student as $s) {
    echo "<br>" . $s;
}

$fruits = array("Apple", "Banana", "Orange");

$person = array("name" => "John", "age" => 30, "city" => "New York");

$arr = array_merge($fruits, $person);

print_r($arr);

$numbers = array(1, 2, 3, 4, 5);

array_shift($numbers);
print_r($numbers);

array_push($numbers, 5);
print_r($numbers);
