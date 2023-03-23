<?php
/*
 *
 */
function monthName(int $monthNumber): string {
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

function array_insert($array, string $value, int $index): array {
    array_splice($array, $index, 0, $value);
    return $array;
}

$someNames = ['Anna', 'Michael', 'Brent', 'Adam', 'Dom', 'Henry', 'James'];
$allNames = array_insert($someNames, 'Phil', 4);
echo '<pre>';
print_r($allNames);
echo '</pre>';


function sumSquares(arr $array): int {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value * $value;
    }
    return $sum;
}

function average($arrayAverage): float {
    $count = count($arrayAverage);
    if ($count == 0) {
        return 0;
    }
    $sum = array_sum($arrayAverage);
    return $sum / $count;
}

   $arrayAverage = [2, 4, 6];
    echo "Average: " . average($arrayAverage) . "\n";

echo '<p></p>';
    function multiply(int $num1, int $num2 = 2): int {
        return $num1 * $num2;
    };

    echo multiply(3);

    function tidyString(string $str):string {
        return strtolower(trim($str));
    };

echo  tidyString('ADAM is HAPpY');

$cityList = 'barcelona, madrid, cardif, milan';
echo '<pre>';
print_r(explode( " ", $cityList));
echo '</pre>';




function findCommon($arr1, $arr2) {
    $common = [];
    foreach ($arr1 as $val1){
        foreach($arr2 as $val2){
            if($val1 == $val2){
                $common[]= $val1;
                break;
            }
        }
    }
    return $common;
}

$arr1 = [1, 2, 3, 5, 8, 13];
$arr2 = [1, 4, 8, 11];
$common = findCommon($arr1, $arr2);
print_r($common);




