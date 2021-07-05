<?php

use PHPUnit\Framework\TestCase;

/**
 * IsPFibonacciTest
 * @group group
 */
class GetTheSmallestNumberFromTest
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

        $result = $this->arrayHelper->getTheSmallestNumberFrom(1, [1, 2, 3]);
        $this->assertEquals($result, 2);

    }


    /** 
     * Проверяем функцию на число, которое больше всех элементов в массиве
     * @test */
    public function shouldReturnNothing()
    {

        $result = $this->arrayHelper->getTheSmallestNumberFrom(3, [1, 2, 3]);
        $this->assertEquals($result, 0);

    }

    /** 
     * Проверяем функцию на пустой массив
     * @test */
    public function shouldReturnZero()
    {

        $result = $this->arrayHelper->getTheSmallestNumberFrom(1, []);

        $this->assertEquals($result, 0);

    }

    /**
     * Проверяем функцию в нерасортированном массиве
     * @test
     */
    public function shouldReturnCertainInUnsortedArray ()
    {

        $result = $this->arrayHelper->getTheSmallestNumberFrom(2, [10, 5, 89, 2, 3, 12, 5]);

        $this->assertEquals($result, 3);

    }

    /** 
     * Проверяем функцию на отрицательные числа
     * @test */
    public function shouldReturnNegative()
    {

        $result = $this->arrayHelper->getTheSmallestNumberFrom(-2, [-1, -2, -3]);

        $this->assertEquals($result, -1);

    }

}
