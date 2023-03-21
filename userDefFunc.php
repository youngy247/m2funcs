<?php

echo '<h1>User-defined Functions</h1>';

function sayHello($name, $age)
{
    echo 'Hello, ' . $name . '! You are ' . $age . '.';
}

sayHello('adam', 21);
echo '<p>&nbsp;</p>';
echo '<p></p>';
sayHello('george', 65);