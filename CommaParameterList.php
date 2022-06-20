<?php

function sayHello(string $name, string $lastname): void
{
    echo "Hello $name $lastname" . PHP_EOL;
}

function sum(int ...$data)
{
}

sayHello("iqbal", "iqbal",);


$array = [
    "first" => "iqbal",
    "second" => "menggala",
    "last" => "maulana",
];
