<?php
// $file = "myFile.txt";

$file = "C:/xampp/htdocs/MCA/php/code/Web_programming_php/cia/fFile.php";
if (file_exists($file)) {
    echo "The file exists.";
} else {
    echo "The file does not exist.";
}
