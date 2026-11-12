<?php
    function fullydivisible($n) {
        if (($n%2)==0) {
            return "$n is fully divisible by";
        } else {
            return "$n is not fully divisible by 2";
        }
    }

print_r(fullydivisible(4) . "<br>") ;   
print_r(fullydivisible(34) . "<br>") ;   
print_r(fullydivisible(5) . "<br>") ;   
print_r(fullydivisible(61) . "<br>") ;   

?>