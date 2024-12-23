<?php
// $file_name = "dev.txt";
// $my_file = fopen($file_name, "w+");
// if ($my_file) {
//     echo "<script>alert('file open');</script>";

//     fwrite($my_file, "dev kalpesh bhai kacha ");

//     // rewind($my_file);
//     // while (($line = fgets($my_file)) !== false) {
//     //     echo nl2br($line);
//     // }

//     rewind($my_file);
//     $r_file = fread($my_file, filesize("dev.txt"));
//     echo nl2br($r_file);

//     fclose($my_file);
// } else {
//     echo "<script>alert('file unable to open');</script>";
// }


//! COPY FILE ERROR

// $file_name = "dev.txt";
// $source_file = "co.txt";

// if (copy($file_name, $source_file)) {
//     echo "copie.";
// } else {
//     echo "error";
// }

//! move or rename file

// $file_name = "dev.txt";
// $source_file = "co.txt";

//* move file

// if (rename($file_name, $source_file)) {
//     echo "success full moved";
// } else {
//     echo "an error";
// }

//* rename file

// if (rename($source_file, $file_name)) {
//     echo "success full moved";
// } else {
//     echo "an error";
// }

// $file_name = 'co.txt';
// if (unlink($file_name)) {
//     echo "${file_name} deleted";
// } else {
//     echo "error";
// }
