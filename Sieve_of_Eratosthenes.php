<?php
    /* CALCULATE PRIME NUMBERS */
    $n = 1000; // Declare limit
    $A = array_fill(2, $n - 1, TRUE);
    $nLimit = sqrt($n);

    for ($i = 2; $i <= $nLimit; $i++) {
        if ($A[$i]) {
            for ($j = $i ** 2; $j <= $n; $j += $i) {
                $A[$j] = FALSE;
            }
        }
    }

    /* OUTPUT PRIME NUMBERS */
    foreach ($A as $indexNum => $indexVal) {
        if ($indexVal) {
            echo $indexNum . ", ";
        }
    }