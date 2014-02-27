<?php

namespace Acme\RecommendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserCategories
 */
class UserCategories
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Acme\RecommendBundle\Entity\Users
     */
    private $idUser;

    /**
     * @var \Acme\RecommendBundle\Entity\Categories
     */
    private $idCategory;


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
     * Set idUser
     *
     * @param \Acme\RecommendBundle\Entity\Users $idUser
     * @return UserCategories
     */
    public function setIdUser(\Acme\RecommendBundle\Entity\Users $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Acme\RecommendBundle\Entity\Users 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idCategory
     *
     * @param \Acme\RecommendBundle\Entity\Categories $idCategory
     * @return UserCategories
     */
    public function setIdCategory(\Acme\RecommendBundle\Entity\Categories $idCategory = null)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return \Acme\RecommendBundle\Entity\Categories 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }
}
