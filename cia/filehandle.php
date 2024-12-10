<?php
$file_name = "dev.txt";
$my_file = fopen($file_name, "w+");
if ($my_file) {
    echo "<script>alert('file open');</script>";

    fwrite($my_file, "dev kacha");

    // rewind($my_file);
    // while (($line = fgets($my_file)) !== false) {
    //     echo nl2br($line);
    // }

    // rewind($my_file);
    // $r_file = fread($my_file, filesize("dev.txt"));
    // echo nl2br($r_file);

    fclose($my_file);
} else {
    echo "<script>alert('file unable to open');</script>";
}
