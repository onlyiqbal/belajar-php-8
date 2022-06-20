<?php

class Example
{
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "string";
$example->data = 12;
$example->data = true;
$example->data = [];

function sampleFunction(string|array $data): string|array
{
    if (is_string($data)) {
        return "Response";
    } else if (is_array($data)) {
        return ["response"];
    }
}

var_dump(sampleFunction("string"));
var_dump(sampleFunction([]));
