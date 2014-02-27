<?php

namespace Acme\RecommendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 */
class Categories
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $parentIdCategory;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     * @return Categories
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set parentIdCategory
     *
     * @param integer $parentIdCategory
     * @return Categories
     */
    public function setParentIdCategory($parentIdCategory)
    {
        $this->parentIdCategory = $parentIdCategory;

        return $this;
    }

    /**
     * Get parentIdCategory
     *
     * @return integer 
     */
    public function getParentIdCategory()
    {
        return $this->parentIdCategory;
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
}
