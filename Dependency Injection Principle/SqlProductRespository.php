<?php

class SqlProductRespository implements ProductRespositry
{
    public function getAllProducts(){
        return ["soap", "toothpaste"];
    }
}