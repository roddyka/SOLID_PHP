<?php 

namespace src\extractor;
class Txt extends File{
    public function readFile(string $path): array {
        $handle = fopen($path, 'r');

        while(!feof($handle)){
            $line = fgets($handle);
            $this->setData(
                substr($line, 11, 30), 
                substr($line, 0, 11), 
                substr($line, 41, 50)
            );
        }

        fclose($handle);

        return $this->getData();
    } 
}