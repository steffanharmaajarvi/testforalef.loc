<?php

namespace App;

class Fibonacci
{

    /**
     * Суммирует элементы массива
     * 
     * @param array входной массив для проверки
     * @return int
     */
    public function sumOfArray ( $arr ): int
    {


        return array_sum($arr);


    }

    /**
     * Проверяем, есть ли в массиве числа фибоначчи, если они есть, то они выводятся в виде массива
     * 
     * @param array входной массив для проверки, если его нет, то он пробежится по заранее установленным
     * @return bool
     */
    public function isFibonacci ( $a = null ): bool
    {

        if ( $this->isPerfectSquare(5*$a*$a + 4) || $this->isPerfectSquare(5*$a*$a - 4) ) {

            return true;

        }

        return false;


    }

    /**
     * Определяет, является ли число идеальным квадратом
     * 
     * @param int число на проверку
     * @return bool
     */
    public function isPerfectSquare ( int $n )
    {

        if ( $n < 0 ) {

            return "";

        }

        $x = (int) sqrt($n);

        return ( $x * $x == $n );


    }

}