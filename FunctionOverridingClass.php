<?php

class ParentClass
{
    public function method(int $data): void;
}

class ChlidClass extends ParentClass
{
    public function method(string $data): void
    {
        echo "Error" . PHP_EOL;
    }
}
