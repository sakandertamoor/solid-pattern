<?php

include "employee.php";

class TaxCalculator {

    public function calculateTax(Employee $employee){
        if ($employee->getEmployeeType() == "fulltime"){
            echo "1% tax";
        }

    }


}