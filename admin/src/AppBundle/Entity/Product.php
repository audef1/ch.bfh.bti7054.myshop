<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var string
     *
     * @ORM\Column(name="product_number", type="string", length=45, nullable=false)
     */
    private $productNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name1", type="string", length=45, nullable=false)
     */
    private $productName1;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name2", type="string", length=45, nullable=true)
     */
    private $productName2;

    /**
     * @var string
     *
     * @ORM\Column(name="product_nicename", type="string", length=45, nullable=false)
     */
    private $productNicename;

    /**
     * @var string
     *
     * @ORM\Column(name="product_price1", type="string", length=45, nullable=false)
     */
    private $productPrice1;

    /**
     * @var string
     *
     * @ORM\Column(name="product_price2", type="string", length=45, nullable=true)
     */
    private $productPrice2;

    /**
     * @var string
     *
     * @ORM\Column(name="product_category", type="string", length=45, nullable=false)
     */
    private $productCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="product_description", type="text", length=65535, nullable=true)
     */
    private $productDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="product_details", type="text", length=65535, nullable=true)
     */
    private $productDetails;

    /**
     * @var string
     *
     * @ORM\Column(name="product_features", type="text", length=65535, nullable=true)
     */
    private $productFeatures;

    /**
     * @var string
     *
     * @ORM\Column(name="product_images", type="text", length=65535, nullable=true)
     */
    private $productImages;

    /**
     * @var string
     *
     * @ORM\Column(name="product_options", type="text", length=65535, nullable=true)
     */
    private $productOptions;

    /**
     * @var string
     *
     * @ORM\Column(name="product_brand", type="string", length=45, nullable=false)
     */
    private $productBrand;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=false)
     */
    private $hidden;

    /**
     * @var integer
     *
     * @ORM\Column(name="translof", type="integer", nullable=false)
     */
    private $translof;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=5, nullable=true)
     */
    private $lang;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $productId;



    /**
     * Set productNumber
     *
     * @param string $productNumber
     *
     * @return Product
     */
    public function setProductNumber($productNumber)
    {
        $this->productNumber = $productNumber;

        return $this;
    }

    /**
     * Get productNumber
     *
     * @return string
     */
    public function getProductNumber()
    {
        return $this->productNumber;
    }

    /**
     * Set productName1
     *
     * @param string $productName1
     *
     * @return Product
     */
    public function setProductName1($productName1)
    {
        $this->productName1 = $productName1;

        return $this;
    }

    /**
     * Get productName1
     *
     * @return string
     */
    public function getProductName1()
    {
        return $this->productName1;
    }

    /**
     * Set productName2
     *
     * @param string $productName2
     *
     * @return Product
     */
    public function setProductName2($productName2)
    {
        $this->productName2 = $productName2;

        return $this;
    }

    /**
     * Get productName2
     *
     * @return string
     */
    public function getProductName2()
    {
        return $this->productName2;
    }

    /**
     * Set productNicename
     *
     * @param string $productNicename
     *
     * @return Product
     */
    public function setProductNicename($productNicename)
    {
        $this->productNicename = $productNicename;

        return $this;
    }

    /**
     * Get productNicename
     *
     * @return string
     */
    public function getProductNicename()
    {
        return $this->productNicename;
    }

    /**
     * Set productPrice1
     *
     * @param string $productPrice1
     *
     * @return Product
     */
    public function setProductPrice1($productPrice1)
    {
        $this->productPrice1 = $productPrice1;

        return $this;
    }

    /**
     * Get productPrice1
     *
     * @return string
     */
    public function getProductPrice1()
    {
        return $this->productPrice1;
    }

    /**
     * Set productPrice2
     *
     * @param string $productPrice2
     *
     * @return Product
     */
    public function setProductPrice2($productPrice2)
    {
        $this->productPrice2 = $productPrice2;

        return $this;
    }

    /**
     * Get productPrice2
     *
     * @return string
     */
    public function getProductPrice2()
    {
        return $this->productPrice2;
    }

    /**
     * Set productCategory
     *
     * @param string $productCategory
     *
     * @return Product
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;

        return $this;
    }

    /**
     * Get productCategory
     *
     * @return string
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * Set productDescription
     *
     * @param string $productDescription
     *
     * @return Product
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * Get productDescription
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * Set productDetails
     *
     * @param string $productDetails
     *
     * @return Product
     */
    public function setProductDetails($productDetails)
    {
        $this->productDetails = $productDetails;

        return $this;
    }

    /**
     * Get productDetails
     *
     * @return string
     */
    public function getProductDetails()
    {
        return $this->productDetails;
    }

    /**
     * Set productFeatures
     *
     * @param string $productFeatures
     *
     * @return Product
     */
    public function setProductFeatures($productFeatures)
    {
        $this->productFeatures = $productFeatures;

        return $this;
    }

    /**
     * Get productFeatures
     *
     * @return string
     */
    public function getProductFeatures()
    {
        return $this->productFeatures;
    }

    /**
     * Set productImages
     *
     * @param string $productImages
     *
     * @return Product
     */
    public function setProductImages($productImages)
    {
        $this->productImages = $productImages;

        return $this;
    }

    /**
     * Get productImages
     *
     * @return string
     */
    public function getProductImages()
    {
        return $this->productImages;
    }

    /**
     * Set productOptions
     *
     * @param string $productOptions
     *
     * @return Product
     */
    public function setProductOptions($productOptions)
    {
        $this->productOptions = $productOptions;

        return $this;
    }

    /**
     * Get productOptions
     *
     * @return string
     */
    public function getProductOptions()
    {
        return $this->productOptions;
    }

    /**
     * Set productBrand
     *
     * @param string $productBrand
     *
     * @return Product
     */
    public function setProductBrand($productBrand)
    {
        $this->productBrand = $productBrand;

        return $this;
    }

    /**
     * Get productBrand
     *
     * @return string
     */
    public function getProductBrand()
    {
        return $this->productBrand;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     *
     * @return Product
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set translof
     *
     * @param integer $translof
     *
     * @return Product
     */
    public function setTranslof($translof)
    {
        $this->translof = $translof;

        return $this;
    }

    /**
     * Get translof
     *
     * @return integer
     */
    public function getTranslof()
    {
        return $this->translof;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return Product
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->productId;
    }
}
