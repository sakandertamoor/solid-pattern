<?php

class InsurancepremiumDiscountCalculator {
    public function calculatePrem (customerprofile $customer){
        return $customer->isLoyalCustomer() ? 20 : 0 ;
    }

}