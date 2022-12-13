<?php
use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase {

    public function testInitialStateItem(){
        $item = new Item();

        $this->assertEquals('', $item->getDescription());
        $this->assertEquals(0, $item->getValue());
    }

    public function testGetSetDescription(){
        $description = 'Chair';

        $item = new Item();
        $item->setDescription($description);
        $this->assertEquals($description, $item->getDescription());
    }


    public function testValidItem(){
        $item = new Item();
      
        //valid item (return true)
        $item->setDescription('White Car');
        $item->setValue(3000);
        $this->assertEquals(true ,$item->validItem());

        //invalid no description item (return false)
        $item->setDescription('');
        $item->setValue(3000);
        $this->assertEquals(false ,$item->validItem());
    }

    /**
     * Undocumented function
     * @dataProvider dataValues
     * @param [type] $value
     * @return void
     */
    public function testGetSetValue($value){
        $item = new Item();
        $item->setValue($value);
        $this->assertEquals($value, $item->getValue());
    }

    public function dataValues(){
        return [
            [100],
            [-2],
            [0],
            [2]
        ];
    }
}