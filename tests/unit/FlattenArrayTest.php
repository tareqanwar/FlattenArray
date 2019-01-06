<?php
/**
 * Tests for perform unit testing on FlattenArray class
 * @author Tareq Anwar <trqnwr@gmail.com>
 */

use PHPUnit\Framework\TestCase;

class FlattenArrayTest extends TestCase
{
    public function testThatWeGetFlatArray()
    {
        $flattenArray = new FlattenArray;
        $flatArray = $flattenArray->getFlatArray([[1,2,[3]],4]);

        $this->assertEquals($flatArray, [1,2,3,4]);
    }

    public function testAginThatWeGetFlatArray()
    {
        $flattenArray = new FlattenArray;
        $flatArray = $flattenArray->getFlatArray([3,[1,2,[3]],4,[10,5]]);

        $this->assertEquals($flatArray, [3,1,2,3,4,10,5]);
    }

    public function testThatWeGetEmptyArrayWhenWePassEmptyArray()
    {
        $flattenArray = new FlattenArray;
        $flatArray = $flattenArray->getFlatArray([]);

        $this->assertEquals($flatArray, []);
    }
}