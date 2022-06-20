<?php

function testMixed(mixed $data): mixed
{
    if (is_array($data)) {
        return [];
    } else if (is_string($data)) {
        return "string";
    } else if (is_int($data)) {
        return 9;
    } else {
        return null;
    }
}

var_dump(testMixed([]));
var_dump(testMixed("iqbal"));
var_dump(testMixed(5));
var_dump(testMixed(null));
