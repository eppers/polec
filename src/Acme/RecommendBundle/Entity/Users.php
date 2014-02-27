<?php
// src/Acme/StoreBundle/Entity/Product.php
 namespace Acme\RecommendBundle\Entity;

 use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="users")
  */
 class Users
 {
     /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
     protected $id;

     /**
     * @var integer
     */
    private $fbProfId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $lname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $local;

    /**
     * @var string
     */
    private $zip;

    /**
     * @var float
     */
    private $geolat;

    /**
     * @var float
     */
    private $geolng;

    /**
     * @var integer
     */
    private $userCategoriesIdUserDetail;




    /**
     * Set fbProfId
     *
     * @param integer $fbProfId
     * @return Users
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
     * Set name
     *
     * @param string $name
     * @return Users
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
     * Set lname
     *
     * @param string $lname
     * @return Users
     */
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * Get lname
     *
     * @return string 
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set local
     *
     * @param string $local
     * @return Users
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return string 
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set zip
     *
     * @param string $zip
     * @return Users
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set geolat
     *
     * @param float $geolat
     * @return Users
     */
    public function setGeolat($geolat)
    {
        $this->geolat = $geolat;

        return $this;
    }

    /**
     * Get geolat
     *
     * @return float 
     */
    public function getGeolat()
    {
        return $this->geolat;
    }

    /**
     * Set geolng
     *
     * @param float $geolng
     * @return Users
     */
    public function setGeolng($geolng)
    {
        $this->geolng = $geolng;

        return $this;
    }

    /**
     * Get geolng
     *
     * @return float 
     */
    public function getGeolng()
    {
        return $this->geolng;
    }

    /**
     * Set userCategoriesIdUserDetail
     *
     * @param integer $userCategoriesIdUserDetail
     * @return Users
     */
    public function setUserCategoriesIdUserDetail($userCategoriesIdUserDetail)
    {
        $this->userCategoriesIdUserDetail = $userCategoriesIdUserDetail;

        return $this;
    }

    /**
     * Get userCategoriesIdUserDetail
     *
     * @return integer 
     */
    public function getUserCategoriesIdUserDetail()
    {
        return $this->userCategoriesIdUserDetail;
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
