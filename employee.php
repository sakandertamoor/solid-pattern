<?php

class Employee {
     
    private $employeeId;
    private $employeeName;
    private $employeeAddress;
    private $employeeNumber;
    private $employeeType;

    public function save(){
            return "";
    }

    /*
     *
     * Getter and Setter functions
     */

    /**
     * @return mixed
     *
     */public function getEmployeeId(){
        return $this->employeeId;
    }
    /**
     * @param mixed $employeeId
     */
    public function setEmployeeId($employeeId)
    {
        $this->employeeId = $employeeId;
    }
    /**
     * @return mixed
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * @return mixed
     */
    public function getEmployeeName()
    {
        return $this->employeeName;
    }
    /**
     * @param mixed $employeeName
     */
    public function setEmployeeName($employeeName)
    {
        $this->employeeName = $employeeName;
    }
    /**
     * @return mixed
     */
    public function getEmployeeNumber()
    {
        return $this->employeeNumber;
    }
    /**
     * @param mixed $employeeNumber
     */
    public function setEmployeeNumber($employeeNumber)
    {
        $this->employeeNumber = $employeeNumber;
    }
    /**
     * @return mixed
     */
    public function getEmployeeAddress()
    {
        return $this->employeeAddress;
    }

    /**
     * @param mixed $employeeAddress
     */
    public function setEmployeeAddress($employeeAddress)
    {
        $this->employeeAddress = $employeeAddress;
    }

    /**
     * @return mixed
     */
    public function getEmployeeType()
    {
        return $this->employeeType;
    }

    /**
     * @param mixed $employeeType
     */
    public function setEmployeeType($employeeType)
    {
        $this->employeeType = $employeeType;
    }


}

