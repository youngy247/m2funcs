<?php

echo '<h1>User-defined Functions</h1>';

/**
 * Greet a given person's name and confirm their age.
 *
 * @param $name string A person's name.
 * @param $age int A person's age.
 * @return void
 */
function sayHello($name, $age)
{
    echo 'Hello, ' . $name . '! You are ' . $age . '.';
}

sayHello('adam', 21);
echo '<p>&nbsp;</p>';
echo '<p></p>';
sayHello('george', 65);