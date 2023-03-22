<?php
function greet(string $greeting, string $name): string
{
    return '<p>' . $greeting . ', ' . $name . '!</p>';
};

echo greet('Good morning', 'Mary');