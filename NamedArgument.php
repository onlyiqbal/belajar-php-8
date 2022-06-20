<?php

function sayHello(string $first, string $middle = "default", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

sayHello("iqbal", "maulana", "menggala");
// Named Argument 
sayHello(last: "menggala", first: "iqbal", middle: "maulana");
// sayHello("iqbal", "menggala"); // ERROR
sayHello(last: "menggala", first: "iqbal");
