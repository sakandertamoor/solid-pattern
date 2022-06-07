<?php

include_once "ProductRespositry.php";

class ProductFactory
{
    protected ProductRespositry $productRepo;

    public function create(){
        return new SqlProductRespository();
    }
}