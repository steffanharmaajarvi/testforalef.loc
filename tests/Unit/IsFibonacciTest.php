<?php

use PHPUnit\Framework\TestCase;

/**
 * IsPFibonacciTest
 * @group group
 */
class IsFibonacciTest extends TestCase
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
    public function shouldReturnTrue()
    {

        $result = $this->fibonacci->isFibonacci(13);
        $this->assertEquals($result, true);

    }

    /** 
     * Проверяем функцию на число, которое не является идеальным квадратом
     * @test */
    public function shouldReturnFalse()
    {

        $result = $this->fibonacci->isFibonacci(9);

        $this->assertEquals($result, false);

    }

}
