<?php

namespace App;

class ArrayHelper
{

    /**
     * Выводит самый распространённый цвет
     * 
     * @param array
     * @return array
     */
    public function average( $array ): int
    { 

        if ( empty( $array ) ) return 0;
        
        return array_sum($array) / count($array);

    }

    /**
     * Получает самое маленькое число в массиве, которое больше, чем заданное число
     * 
     * @param int число, больше которого необходимо получить 
     * @param array входной массив
     */
    public function getTheSmallestNumberFrom ( $number, $array )
    {

        asort($array);

        foreach ( $array as $a ) {

            if ( $a > $number ) {

                return $a;
                

            }

        }


        
    }
}