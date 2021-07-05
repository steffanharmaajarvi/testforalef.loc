<?php

use PHPUnit\Framework\TestCase;

/**
 * GetColorPaletteTest
 * @group group
 */
class GetColorPalletTest 
    extends TestCase
{

    /**
     * Объект класса Picture
     */
    protected $picture;

    public function setUp (): void 
    {

        $this->picture = new \App\Picture();
        $this->picture->url = 'https://svidea.ru/a/svidea/files/multifile/2388/ZHeltyj1_1.jpg';


    }

    /** 
     * Проверяем функцию на фото, залитое одним цветом
     * @test */
    public function shouldReturnCertainColor()
    {

        $result = $this->picture->getColorPallet();

        $this->assertEquals($result, ['fdb700']);

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
