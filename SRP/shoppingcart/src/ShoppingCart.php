<?php

namespace App;

class ShoppingCart {

    private array $items;
    private string $status;
    private float $totalValue;

    public function __construct()
    {
        $this->items = [];
        $this->status = 'aberto';
        $this->totalValue = 0;
    }

    public function showItems(){
        return $this->items;
    }

    public function addToCart(string $item, float $value){
        array_push($this->items, ["item"=>$item, "value"=>$value]);
        $this->totalValue += $value;
        return true;
    }

    public function showTotalValue(){
        return $this->totalValue;
    }

    public function statusCart(){
        return $this->status;
    }

    public function confirmOrder(){
        if($this->validateCart()){
            $this->status = 'Order finished!';
            $this->sendConfirmationEmail();

            return true;
        }
        return false;
    }

    public function sendConfirmationEmail(){
        return "<br>EMAIL CONFIRMATION: <br>Your order products:<br>
        Order Status: $this->status<br>Total Value: $this->totalValue
        ";
    }

    public function validateCart(){
        return count($this->items) > 0;
    }
}