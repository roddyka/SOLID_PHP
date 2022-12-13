<?php 

namespace src\extractor;
class Xlsx extends File{

    /**
     * Read Xlsx file
     * @todo Create a xlsx reader
     * @param string $path
     * @return array
     */
    public function readFile(string $path): array {

        return $this->getData();
    } 
}