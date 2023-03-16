<?php

use PHPUnit\Framework\TestCase;

class ArrayFindTest extends TestCase
{
    /**
     * @test
     */
    public function simpleSearch()
    {
        $found = array_find([1, 2, 3], fn($value) => $value === 2);

        $this->assertEquals(2, $found);
    }

    /**
     * @test
     */
    public function exitsOnFirstElement()
    {
        $items = [
            ['name' => 'John', 'age' => 20],
            ['name' => 'Jane', 'age' => 21],
            ['name' => 'Jack', 'age' => 22],
        ];

        $iterations = 0;

        $found = array_find($items, function ($item) use (&$iterations) {
            ++$iterations;

            return $item['name'] === 'Jane';
        });

        $this->assertEquals(2, $iterations);
        $this->assertEquals(['name' => 'Jane', 'age' => 21], $found);
    }
}
