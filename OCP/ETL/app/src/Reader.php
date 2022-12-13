<?php

namespace src;
use src\File;

class Reader {
    private $dir;
    private $file;

    public function getDir(): string {
        return $this->dir;
    }

    public function getFile(): string {
        return $this->file;
    }

    public function setDir(string $dir){
        $this->dir = $dir;
    }

    public function setFile(string $file) {
        $this->file = $file;
    }

    public function readFile(){
        $path = $this->getDir().'/'.$this->getFile();
        $ext = explode('.', $this->getFile());

        $class = '\src\extractor\\'.ucfirst($ext[1]);
        return call_user_func_array(
            [
                new $class,
                'readFile'
            ],
            [
                $path
            ]
            );
    }
}