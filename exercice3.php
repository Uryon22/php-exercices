<?php
# 3. Fizz Buzz
// Utilisation de modulo (%)
function fizzBuzz() {
    for($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0) {
            echo $i % 3;
            echo " Fizz";
        }
        if ($i % 5 == 0) {
            echo $i % 5;
            echo " Buzz";
        }
        echo "\n";
    }
}

fizzBuzz();

