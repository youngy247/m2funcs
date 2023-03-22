<?php

function monthName(int $monthNumber) {
    $months = [
        1 => 'January',
        2 => 'February',
        3 => 'March',
        4 => 'April',
        5 => 'May',
        6 => 'June',
        7 => 'July',
        8 => 'August',
        9 => 'September',
        10 => 'October',
        11 => 'November',
        12 => 'December'
    ];

    if ($monthNumber >= 1 && $monthNumber <= 12) {
        return $months[$monthNumber];
    } else {
        return 'Invalid month';
    }
}

echo monthName(4);

function array_insert($array, $value, $index) {
    // Insert the value at the specified index using array_splice()
    array_splice($array, $index, 0, $value);

    // Return the modified array
    return $array;
}

$someNames = ['Anna', 'Michael', 'Brent', 'Adam', 'Dom', 'Henry', 'James'];
$allNames = array_insert($someNames, 'Phil', 4);
echo '<pre>';
print_r($allNames);
echo '</pre>';


function sumSquares($array) {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value * $value;
    }
    return $sum;
}

function average($array): float {
    $count = count($array);
    if ($count == 0) {
        return 0;
    }
    $sum = array_sum($array);
    return $sum / $count;
}

   $array = [2, 4, 6];
    echo "Average: " . average($array) . "\n";






