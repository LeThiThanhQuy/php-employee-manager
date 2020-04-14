<?php

namespace Controller;
class Employee
{
    private $firstName;
    private $lastName;
    private $dateOfBirth;
    private $address;
    private $position;

    public function __construct($firstName, $lastName, $dateOfBirth, $address, $position)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->position = $position;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    public function getFirstName(){
        return $this->firstName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function getLastName(){
        return $this->lastName;
    }

    public function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }
    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }

    public function setAddress($address){
        $this->address = $address;
    }
    public function getAddress(){
        return $this->address;
    }
    public function setPosition($position){
        $this->position = $position;
    }
    public function getPosition(){
        return $this->position;
    }
}