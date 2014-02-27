<?php

namespace Acme\RecommendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Friends
 *
 * @ORM\Table(name="friends", indexes={@ORM\Index(name="fk_friends_users1_idx", columns={"users_id_user"})})
 * @ORM\Entity
 */
class Friends
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="fb_prof_id", type="bigint", nullable=true)
     */
    private $fbProfId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\RecommendBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Acme\RecommendBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="users_id_user", referencedColumnName="id")
     * })
     */
    private $usersUser;



    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return Friends
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set fbProfId
     *
     * @param integer $fbProfId
     * @return Friends
     */
    public function setFbProfId($fbProfId)
    {
        $this->fbProfId = $fbProfId;

        return $this;
    }

    /**
     * Get fbProfId
     *
     * @return integer 
     */
    public function getFbProfId()
    {
        return $this->fbProfId;
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
     * Set usersUser
     *
     * @param \Acme\RecommendBundle\Entity\Users $usersUser
     * @return Friends
     */
    public function setUsersUser(\Acme\RecommendBundle\Entity\Users $usersUser = null)
    {
        $this->usersUser = $usersUser;

        return $this;
    }

    /**
     * Get usersUser
     *
     * @return \Acme\RecommendBundle\Entity\Users 
     */
    public function getUsersUser()
    {
        return $this->usersUser;
    }
}
