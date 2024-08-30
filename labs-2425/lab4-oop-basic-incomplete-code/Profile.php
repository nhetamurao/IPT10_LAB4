<?php
/**
 * This class is intentionally written as incomplete, students should be able to provide the missing properties and methods to this class
 */
class Profile
{
    protected $first_name;
    protected $middle_name;
    protected $last_name;
    protected $email;
    protected $address;
    protected $favorite_quote;

    // Constructor to initialize the object
    public function __construct($last_name, $first_name, $middle_name)
    {
        $this->last_name = $last_name;
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
    }

    public function getCompleteName($format = '{last}, {first} {middle}')
    {
        $full_name = $format;
        $full_name = str_replace('{last}', $this->getLastName(), $full_name);
        $full_name = str_replace('{first}', $this->getFirstName(), $full_name);
        $full_name = str_replace('{middle}', $this->getMiddleName(), $full_name);
        return $full_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getMiddleName()
    {
        return $this->middle_name;
    }

    protected function getLastName()
    {
        return $this->last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getFavoriteQuote()
    {
        return $this->favorite_quote;
    }

    public function setFavoriteQuote($quote)
    {
        $this->favorite_quote = $quote;
    }
}