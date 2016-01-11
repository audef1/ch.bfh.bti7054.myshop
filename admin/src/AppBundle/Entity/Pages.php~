<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pages
 *
 * @ORM\Table(name="pages")
 * @ORM\Entity
 */
class Pages
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=45, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="nicename", type="string", length=45, nullable=true)
     */
    private $nicename;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=5, nullable=true)
     */
    private $lang;

    /**
     * @var boolean
     *
     * @ORM\Column(name="inmenu", type="boolean", nullable=true)
     */
    private $inmenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos", type="integer", nullable=true)
     */
    private $pos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=true)
     */
    private $hidden;

    /**
     * @var integer
     *
     * @ORM\Column(name="translof", type="integer", nullable=true)
     */
    private $translof;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent", type="integer", nullable=true)
     */
    private $parent;

    /**
     * @var integer
     *
     * @ORM\Column(name="page_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $pageId;



    /**
     * Set title
     *
     * @param string $title
     *
     * @return Pages
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set nicename
     *
     * @param string $nicename
     *
     * @return Pages
     */
    public function setNicename($nicename)
    {
        $this->nicename = $nicename;

        return $this;
    }

    /**
     * Get nicename
     *
     * @return string
     */
    public function getNicename()
    {
        return $this->nicename;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Pages
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return Pages
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
     * Set inmenu
     *
     * @param boolean $inmenu
     *
     * @return Pages
     */
    public function setInmenu($inmenu)
    {
        $this->inmenu = $inmenu;

        return $this;
    }

    /**
     * Get inmenu
     *
     * @return boolean
     */
    public function getInmenu()
    {
        return $this->inmenu;
    }

    /**
     * Set pos
     *
     * @param integer $pos
     *
     * @return Pages
     */
    public function setPos($pos)
    {
        $this->pos = $pos;

        return $this;
    }

    /**
     * Get pos
     *
     * @return integer
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     *
     * @return Pages
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
     * @return Pages
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
     * Set parent
     *
     * @param integer $parent
     *
     * @return Pages
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return integer
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Get pageId
     *
     * @return integer
     */
    public function getPageId()
    {
        return $this->pageId;
    }
}
