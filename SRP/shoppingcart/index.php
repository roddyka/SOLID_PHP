<?php
require __DIR__."/vendor/autoload.php";
use App\ShoppingCart;

$cart = new ShoppingCart();

echo "<h3>Shopping Cart (NO SRP)</h3>";
print_r($cart->showItems());
echo "<br>";
echo "Value (total):". $cart->showTotalValue();
echo "<br>";

$cart->addToCart("Bike", 350.00);
$cart->addToCart("TV", 573.40);
$cart->addToCart("Computer", 1573.44);

echo "<br>";
print_r($cart->showItems());
echo "<br>";
echo "Value (total):". $cart->showTotalValue();

echo "<br>";
echo $cart->statusCart();
echo "<br>";
echo "<br>";
if($cart->confirmOrder()){
    echo "Success Order!";
}else {
    echo "cart dont have items";
}
echo $cart->statusCart();
echo "<br>";
echo "<br>";
echo "Value (total):". $cart->showTotalValue();
echo "<br>";
echo $cart->sendConfirmationEmail();