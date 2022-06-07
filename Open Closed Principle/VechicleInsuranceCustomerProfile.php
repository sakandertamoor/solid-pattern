<?php

class VechicleInsuranceCustomerProfile implements customerprofile
{
    public function isLoyalCustomer (){
        return (bool) mt_rand(0, 1);
    }
}