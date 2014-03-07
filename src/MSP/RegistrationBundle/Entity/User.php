<?php

namespace MSP\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $department;

    /**
     * @var integer
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $pillar;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $facebookUsername;

    /**
     * @var string
     */
    private $skypeUserName;

    /**
     * @var string
     */
    private $indexNumber;


    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return User
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return integer 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set pillar
     *
     * @param string $pillar
     * @return User
     */
    public function setPillar($pillar)
    {
        $this->pillar = $pillar;

        return $this;
    }

    /**
     * Get pillar
     *
     * @return string 
     */
    public function getPillar()
    {
        return $this->pillar;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set facebookUsername
     *
     * @param string $facebookUsername
     * @return User
     */
    public function setFacebookUsername($facebookUsername)
    {
        $this->facebookUsername = $facebookUsername;

        return $this;
    }

    /**
     * Get facebookUsername
     *
     * @return string 
     */
    public function getFacebookUsername()
    {
        return $this->facebookUsername;
    }

    /**
     * Set skypeUserName
     *
     * @param string $skypeUserName
     * @return User
     */
    public function setSkypeUserName($skypeUserName)
    {
        $this->skypeUserName = $skypeUserName;

        return $this;
    }

    /**
     * Get skypeUserName
     *
     * @return string 
     */
    public function getSkypeUserName()
    {
        return $this->skypeUserName;
    }

    /**
     * Get indexNumber
     *
     * @return string 
     */
    public function getIndexNumber()
    {
        return $this->indexNumber;
    }
    
    public function setIndexNumber($indexNumber)
    {
        $this->indexNumber = $indexNumber;

        return $this;
    }
}
