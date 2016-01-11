<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductStock
 *
 * @ORM\Table(name="product_stock")
 * @ORM\Entity
 */
class ProductStock
{
    /**
     * @var integer
     *
     * @ORM\Column(name="product_number", type="integer", nullable=true)
     */
    private $productNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer", nullable=true)
     */
    private $stock;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $stockId;



    /**
     * Set productNumber
     *
     * @param integer $productNumber
     *
     * @return ProductStock
     */
    public function setProductNumber($productNumber)
    {
        $this->productNumber = $productNumber;

        return $this;
    }

    /**
     * Get productNumber
     *
     * @return integer
     */
    public function getProductNumber()
    {
        return $this->productNumber;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return ProductStock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Get stockId
     *
     * @return integer
     */
    public function getStockId()
    {
        return $this->stockId;
    }
}
