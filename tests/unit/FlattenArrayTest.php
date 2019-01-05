<?php

use PHPUnit\Framework\TestCase;

class FlattenArrayTest extends TestCase
{
    public function testThatWeGetFlatArray()
    {
        $flatArray = FlattenArray::getFlatArray([[1,2,[3]],4]);

        $this->assertEquals($flatArray, [1,2,3,4]);
    }
}