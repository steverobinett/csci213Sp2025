<?php
//POPO for the customer table
class Customer
{
    private $cust_id;
    private $cust_fname;
    private $cust_lname;
   

    public function __construct()
    {
        ;
    }

    public function setCustomerID($customerID)
    {
        $this->cust_id = $customerID;
    }
    public function setFirstName($firstName)
    {
        $this->cust_fname = $firstName;
    }
    public function setLastName($lastName)
    {
        $this->cust_lname = $lastName;
    }

    public function getCustomerID()
    {
        return htmlspecialchars($this->cust_id);
    }

    public function getFirstName()
    {
        return htmlspecialchars($this->cust_fname);
    }

    public function getLastName()
    {
        return htmlspecialchars($this->cust_lname);
    }

}