<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salts
 *
 * @ORM\Table(name="salts")
 * @ORM\Entity
 */
class Salts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=true)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=200, nullable=true)
     */
    private $salt;

    /**
     * @var integer
     *
     * @ORM\Column(name="salt_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $saltId;



    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return Salts
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return integer
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return Salts
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Get saltId
     *
     * @return integer
     */
    public function getSaltId()
    {
        return $this->saltId;
    }
}
