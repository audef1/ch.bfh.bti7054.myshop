<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductBrand
 *
 * @ORM\Table(name="product_brand")
 * @ORM\Entity
 */
class ProductBrand
{
    /**
     * @var string
     *
     * @ORM\Column(name="brand_name", type="string", length=45, nullable=false)
     */
    private $brandName;

    /**
     * @var string
     *
     * @ORM\Column(name="brand_nicename", type="string", length=45, nullable=false)
     */
    private $brandNicename;

    /**
     * @var integer
     *
     * @ORM\Column(name="brand_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $brandId;



    /**
     * Set brandName
     *
     * @param string $brandName
     *
     * @return ProductBrand
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Get brandName
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Set brandNicename
     *
     * @param string $brandNicename
     *
     * @return ProductBrand
     */
    public function setBrandNicename($brandNicename)
    {
        $this->brandNicename = $brandNicename;

        return $this;
    }

    /**
     * Get brandNicename
     *
     * @return string
     */
    public function getBrandNicename()
    {
        return $this->brandNicename;
    }

    /**
     * Get brandId
     *
     * @return integer
     */
    public function getBrandId()
    {
        return $this->brandId;
    }
}
