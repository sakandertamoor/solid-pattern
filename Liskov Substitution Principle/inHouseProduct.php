<?php
include "product.php";

class inHouseProduct extends product
{
    function __construct() {
        parent::__construct();
    }
     function applyExtraDiscount(){
         return  $this->discount * 1.5;
    }
    public function getDouble(){
        $this.$this->applyExtraDiscount();
        return $this->discount;
    }

}