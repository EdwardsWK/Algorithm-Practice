<?php
    for($i = 1; $i <= 100; $i++) { //For 1-100 (Note: Cannot do = 100 as script won't work if you do)
        if ($i % 15 == 0) { //If number is divisible by 15 with no remainder
            echo "FizzBuzz"; //Output FizzBuzz
        } elseif ($i % 5 == 0) { // Else if it's divisible by 5 with no remainder
            echo "Buzz"; //Output Buzz
        } elseif ($i % 3 == 0) { // Else if it's only divisible by 3 with no remainder
            echo "Fizz"; //Output Fizz
        } else { //If it's not divisible by any of the above
            echo $i; //Output the current iteration number
        }
        </br>
    }
