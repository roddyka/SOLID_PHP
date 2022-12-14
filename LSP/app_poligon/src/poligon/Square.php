<?php
namespace src\poligon; 

class Square {
    protected $width;
    protected $height;

    public function setWidth(float $width){
        $this->width = $width;
        $this->height = $width;
    }

    public function getWidth(){
        return $this->width;
    }

    public function setHeight(float $height){
        $this->width = $height;
        $this->height = $height;
    }


    public function getHeight(){
        return $this->height;
    }
}