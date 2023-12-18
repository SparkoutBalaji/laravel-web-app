<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use App\Http\Controllers\EmpController;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */

    /*public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }*/

    public function testBasicTest()
   {
       $Emp = new EmpController();
       $r = $Emp->add(4,5);
       $this->assertEquals(9, $r);
       $this->assertNotEquals(0,$r);
       $this->assertNotEmpty($r, 'The result should not be empty.');
}
}
