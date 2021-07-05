<?php

namespace App;

class Picture
{

    /**
     * Ссылка на картинку
     */
    public $url;

    /**
     * Выводит самый распространённый цвет
     * 
     * @return array
     */
    public function getColorPallet(): array
    { 
        
        if( !$this->url ) return false;

        // Создаём картинку из ссылки
        $img = imagecreatefromjpeg($this->url );

        $imgSizes = getimagesize( $this->url );

        $resizedImg = imagecreatetruecolor(1, 1);

        imagecopyresized( $resizedImg, $img , 0, 0 , 0, 0, 8, 16, $imgSizes[0], $imgSizes[1]);

        imagedestroy($img);

        $colors = [];

        $colors[] = dechex( imagecolorat( $resizedImg, 0, 0 ) );

        imagedestroy($resizedImg);

        return $colors;

    }

}