<?php

namespace Tests\Unit;

use App\Http\Controllers\FizzBuzzController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FizzBuzzTest extends TestCase
{
    /** @var FizzBuzzController */
    private $fizzbuzz;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fizzbuzz = new FizzBuzzController();
    }

    /** @test */
    public function first_number_is_one()
    {
        $this->assertEquals(1, $this->fizzbuzz->getData()[1]);
    }

    /** @test */
    public function third_number_is_fizz()
    {
        $this->assertEquals('fizz', $this->fizzbuzz->getData()[3]);
    }

    /** @test */
    public function five_number_is_buzz()
    {
        $this->assertEquals('buzz', $this->fizzbuzz->getData()[5]);
    }

    /** @test */
    public function fifteen_number_is_fizzbuzz()
    {
        $this->assertEquals('fizzbuzz', $this->fizzbuzz->getData()[15]);
    }

    /** @test */
    public function getData_must_return_then_is_fizz()
    {
        $this->assertEquals(100, count($this->fizzbuzz->getData()));

    }

    /** @test */
    public function every_third_number_then_is_fizz()
    {
        $numbers = $this->fizzbuzz->getData();
        for ($i = 1; $i <= count($numbers); $i ++) {
            if ($i % 3 == 0 && $i % 5 != 0) {
                $this->assertEquals('fizz',$numbers[$i]);
            }
        }

    }

    /** @test */
    public function every_five_number_then_is_buzz()
    {
        $numbers = $this->fizzbuzz->getData();
        for ($i = 1; $i <= count($numbers); $i++) {
            if ($i % 3 != 0 && $i % 5 == 0) {
                $this->assertEquals('buzz', $numbers[$i]);
            }
        }

    }

    /** @test */
    public function every_fifteen_number_then_is_fizzbuzz()
    {
        $numbers = $this->fizzbuzz->getData();
        for ($i = 1; $i <= count($numbers); $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $this->assertEquals('fizzbuzz', $numbers[$i]);
            }
        }

    }


}
