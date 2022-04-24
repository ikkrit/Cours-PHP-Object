<?php

class TestDeClassPhp {

    private $testInt;
    private $testStr;
    private $testInt2;

    public function __construct(int $testInt, string $testStr, int $testInt2)
    {
        $this->testInt = $testInt;
        $this->testStr = $testStr;
        $this->testInt2 = $testInt2;
    }

    public function testFunctionClass($test1, $test2) {
        $resultTest = ($test1 * $test2);
        $this->resultTest = $resultTest;
        return $this->resultTest;
    }
}

$testDeLaFunction = new TestDeClassPhp(45, "Il etait une fois", 55);

echo $testDeLaFunction->testFunctionClass($testInt,$testInt2);