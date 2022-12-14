<?php 

namespace src\poligon;

class Rect {
    protected $width;
    protected $height;

    public function setWidth(float $width){
        $this->width = $width;
    }

    public function getWidth(){
        return $this->width;
    }

    public function setHeight(float $height){
        $this->height = $height;
    }

    public function getHeight(){
        return $this->height;
    }
}