<?php

$value = "E";
$result = "";

switch ($value) {
    case "A":
    case "B":
    case "C":
        $result = "Anda lulus";
        break;
    case "D":
        $result = "Anda tidak lulus";
        break;
    case "E":
        $result = "Mungkin Anda salah jurusan";
        break;
    default:
        $result = "Nilai apaan itu";
}
echo $result . PHP_EOL;


// Match Expreessin
$result = match ($value) {
    "A", "B", "C" => "Anda lulus",
    "D" => "Anda salah jurusan",
    "E" => "Mungkin salah jurusan",
    default => "Nilai apaan itu"
};

echo $result . PHP_EOL;

$value = 20;
$result = match (true) {
    $value >= 90 => "A",
    $value >= 80 => "B",
    $value >= 70 => "C",
    $value >= 60 => "D",
    default => "E"
};

echo $result . PHP_EOL;

$name = "Mrs.iqbal";
$result = match (true) {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mom",
};

echo $result . PHP_EOL;
