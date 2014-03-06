<?php

namespace MSP\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Login
 */
class Login
{
    /**
     * @var string
     */
    private $password;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MSP\RegistrationBundle\Entity\User
     */
    private $user;


    /**
     * Set password
     *
     * @param string $password
     * @return Login
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param \MSP\RegistrationBundle\Entity\User $user
     * @return Login
     */
    public function setUser(\MSP\RegistrationBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \MSP\RegistrationBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
