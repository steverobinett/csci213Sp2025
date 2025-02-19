<?php
//POPO for the customer table
class Customer
{
    private $customerID;
    private $firstName;
    private $lastName;
   

    public function __construct()
    {
        $this->customerID = null;
        $this->firstName = null;
        $this->lastName = null;
       
    }

    public function setCustomerID($customerID)
    {
        $this->customerID = $customerID;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getCustomerID()
    {
        return htmlspecialchars($this->customerID);
    }

    public function getFirstName()
    {
        return htmlspecialchars($this->firstName);
    }

    public function getLastName()
    {
        return htmlspecialchars($this->lastName);
    }

}