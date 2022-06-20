<?php

trait SampleTrait
{
    public abstract function sampleFunction(): string;
}

class SampleClass
{
    use SampleTrait;
    public function sampleFunction(): string
    {
        return "Finish" . PHP_EOL;
    }
}

$sampleObject = new SampleClass();
echo $sampleObject->sampleFunction();
