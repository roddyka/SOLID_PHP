<?php
require __DIR__."/vendor/autoload.php";
use App\ShoppingCart;
use App\Item;
use App\Order;
use App\EmailService;

echo "<h3>Shopping Cart - SRP</h3><br>";

$order = new Order();
//-----------------------------------------//
$item1 = new Item();
$item2 = new Item();

$item1->setDescription("Car");
$item1->setValue(3456.00);

$item2->setDescription("Bike");
$item2->setValue(234.00);
//-----------------------------------------//
echo '<h4>Initial Order</h4>';
echo '<pre>';
print_r($order);
echo '</pre>';
//-----------------------------------------//
$order->getShoppingCart()->addItem($item1);
$order->getShoppingCart()->addItem($item2);
//-----------------------------------------//
echo '<h4>Order</h4>';
echo '<pre>';
print_r($order);
echo '</pre>';
//-----------------------------------------//
echo '<h4>Order Items</h4>';
echo '<pre>';
print_r($order->getShoppingCart()->getItems());
echo '</pre>';
//-----------------------------------------//
echo '<h4>Order Value</h4>';
$total = 0;
foreach($order->getShoppingCart()->getItems() as $key => $item){
    $total += $item->getValue();
}
echo $total;
//-----------------------------------------//
echo '<h4>Cart Validate</h4>';
echo $order->getShoppingCart()->cartValidate();
//-----------------------------------------//
echo '<h4>Order Status</h4>';
print_r($order->getStatus());
//-----------------------------------------//
echo '<h4>Confirm Order</h4>';
print_r($order->confirm());
//-----------------------------------------//
echo '<h4>Order Status</h4>';
print_r($order->getStatus());
//-----------------------------------------//
echo '<h4>Order Email</h4>';
if($order->getStatus() == 'Done'){
    echo EmailService::sendEmail();
}