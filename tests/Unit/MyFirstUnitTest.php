<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Calculator;

class MyFirstUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testSum()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->sum(2,2) == 4);
    }

    public function testDiff()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->diff(2,2) == 0);
    }
     public function testMultiplication()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->multiplication(2,2) == 4);
    }

    public function testDivision()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->div(2,2) == 1);
    }


}
