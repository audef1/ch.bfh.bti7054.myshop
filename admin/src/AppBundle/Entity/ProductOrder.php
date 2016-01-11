<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductOrder
 *
 * @ORM\Table(name="product_order")
 * @ORM\Entity
 */
class ProductOrder
{
    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=45, nullable=true)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="order_products", type="string", length=45, nullable=true)
     */
    private $orderProducts;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_date", type="datetime", nullable=false)
     */
    private $orderDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $orderId;



    /**
     * Set customerId
     *
     * @param string $customerId
     *
     * @return ProductOrder
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set orderProducts
     *
     * @param string $orderProducts
     *
     * @return ProductOrder
     */
    public function setOrderProducts($orderProducts)
    {
        $this->orderProducts = $orderProducts;

        return $this;
    }

    /**
     * Get orderProducts
     *
     * @return string
     */
    public function getOrderProducts()
    {
        return $this->orderProducts;
    }

    /**
     * Set orderDate
     *
     * @param \DateTime $orderDate
     *
     * @return ProductOrder
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Get orderId
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
}
