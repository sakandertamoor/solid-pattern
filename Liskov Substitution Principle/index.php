<?php

include_once "product.php";
include_once "inHouseProduct.php";

 $productOne = new product();
 //$productTwo = new product();
 $productT = new inHouseProduct();

echo  $productT->applyExtraDiscount() ;