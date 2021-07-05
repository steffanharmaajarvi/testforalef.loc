<?php

use PHPUnit\Framework\TestCase;

/**
 * IsPFibonacciTest
 * @group group
 */
class SumOfArrayTest extends TestCase
{

    /**
     * Объект класса Fibonacci
     */
    protected $fibonacci;

    public function setUp (): void 
    {

        $this->fibonacci = new \App\Fibonacci();


    }

    /** 
     * Проверяем функцию на число, которое является числом фибоначчи
     * @test */
    public function shouldReturnCertainValue()
    {

        $result = $this->fibonacci->sumOfArray([13, 1]);
        $this->assertEquals($result, 14);

    }

    /** 
     * Проверяем функцию на пустой массив
     * @test */
    public function shouldReturnZero()
    {

        $result = $this->fibonacci->sumOfArray([]);

        $this->assertEquals($result, 0);

    }
    
}
