<?php

use PHPUnit\Framework\TestCase;

/**
 * IsPFibonacciTest
 * @group group
 */
class AverageOfArrayTest
     extends TestCase
{

    /**
     * Объект класса Fibonacci
     */
    protected $arrayHelper;

    public function setUp (): void 
    {

        $this->arrayHelper = new \App\ArrayHelper();


    }

    /** 
     * Проверяем функцию на конкретный массив
     * @test */
    public function shouldReturnCertainValue()
    {

        $result = $this->arrayHelper->average([1, 2, 3]);
        $this->assertEquals($result, 2);

    }

    /** 
     * Проверяем функцию на пустой массив
     * @test */
    public function shouldReturnZero()
    {

        $result = $this->arrayHelper->average([]);

        $this->assertEquals($result, 0);

    }

    /** 
     * Проверяем функцию на отрицательные числа
     * @test */
    public function shouldReturnNegative()
    {

        $result = $this->arrayHelper->average([-1, -2, -3]);

        $this->assertEquals($result, -2);

    }

}
