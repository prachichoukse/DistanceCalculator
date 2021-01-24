<?php

use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    /** @test */
    public function additionOfTwoNumbers()
    {
        $operation = new Model\Operation();
        $addition = $operation->TotalDistance(3,5);

        $this->assertEquals(8,$addition);
    }
}