<?php
$file = fopen("exammple.txt", "r");

while (!feof($file)) {
    echo fgets($file) . "<br>";
}

fclose($file)


?>