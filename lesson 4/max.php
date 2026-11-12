<?php
    function max2($x, $y) {
        if ($x > $y) {
            return $x;
        } else {
            return $y;
        }
    }
$a = 20;
$b = 30;
$test = max2($a, $b);

echo "The max of $a is $b is $test";

?>