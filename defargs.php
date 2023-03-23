<?php
/**
 * @param string $greeting
 * @param string $name
 * @return string
 */
function greet(string $greeting, string $name = 'Earthling'): string
{
    return '<p>' . $greeting . ', ' . $name . '!</p>';
};

echo greet('Good morning', 'Mary');

echo greet('Greetings');
