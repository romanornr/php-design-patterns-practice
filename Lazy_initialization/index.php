<?php

require_once('Burger.php');
require_once('BurgerLazyLoader.php');

$burger = BurgerLazyLoader::getBurger(true, true);
echo "Burger with cheese and fries costs: $".$burger->getPrice();

echo "\n";
echo "Instances in lazy loader:".BurgerLazyLoader::getBurgerCount();
echo "\n\n";

$burger = BurgerLazyLoader::getBurger(true, false);
echo "Burger with cheese and no fries costs: $".$burger->getPrice();

echo "\n";
echo "Instances in lazy loader:".BurgerLazyLoader::getBurgerCount();
echo "\n\n";

$burger = BurgerLazyLoader::getBurger(true, true);
echo "Burger with cheese and friest costs: $".$burger->getPrice();
echo "\n";
echo "Instances in lazy loader:".BurgerLazyLoader::getBurgerCount();