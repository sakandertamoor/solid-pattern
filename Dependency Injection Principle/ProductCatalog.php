
<?php
include_once "SqlProductRespository.php";

class ProductCatalog
{
    function listAllproducts(){
        $sqlrepo = new SqlProductRespository();
        $sqlrepo->getAllProducts();
    }

}