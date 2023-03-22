<?php


function monthName($monthNumber) {
    $months = array(
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
    );

    if ($monthNumber >= 1 && $monthNumber <= 12) {
        return $months[$monthNumber];
    } else {
        return 'Invalid month';
    }
}

echo monthName(4);