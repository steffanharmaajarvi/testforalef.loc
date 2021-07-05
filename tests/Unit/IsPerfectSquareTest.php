<?php

use PHPUnit\Framework\TestCase;

/**
 * IsPerfectSquareTest
 * @group group
 */
class IsPerfectSquareTest extends TestCase
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
     * Проверяем функцию на число, которое является идеальным квадратом
     * @test */
    public function shouldReturnTrue()
    {

        $result = $this->fibonacci->isPerfectSquare(4);

        $this->assertEquals($result, true);

    }

    /** 
     * Проверяем функцию на число, которое не является идеальным квадратом
     * @test */
    public function shouldReturnFalse()
    {

        $result = $this->fibonacci->isPerfectSquare(8);

        $this->assertEquals($result, false);

    }

    /** 
     * Проверяем функцию на ОДЗ
     * @test */
    public function shouldReturnNothing()
    {

        $result = $this->fibonacci->isPerfectSquare(-1);

        $this->assertEquals($result, "");

    }

}
