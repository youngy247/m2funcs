<?php

echo '<h1>User-defined Functions</h1>';

/**
 * Greet a given person's name and confirm their age.
 *
 * @param $name string A person's name.
 * @param $age int A person's age.
 * @return string The greeting.
 */
function sayHello($name, $age)
{
    return 'Hello, ' . $name . '! You are ' . $age . '.';
}

echo sayHello('adam', 21);
echo '<p></p>';
echo sayHello('george', 65);
echo '<p></p>';
$greeting = sayHello('Mary', 21);

echo $greeting;

echo '<p></p>';
function timesBy3DivideBy2(int $number): float
{
    return ($number * 3 / 2);
}
echo timesBy3DivideBy2(6);