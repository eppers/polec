<?php
namespace Acme\RecommendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 */
class Messages
{   
   
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idReceiver;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \DateTime
     */
    private $dateSend;

    /**
     * @var \DateTime
     */
    private $dateReceive;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $idSender;


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
     * Set idReceiver
     *
     * @param integer $idReceiver
     * @return Messages
     */
    public function setIdReceiver($idReceiver)
    {
        $this->idReceiver = $idReceiver;

        return $this;
    }

    /**
     * Get idReceiver
     *
     * @return integer 
     */
    public function getIdReceiver()
    {
        return $this->idReceiver;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Messages
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
     * Set dateSend
     *
     * @param \DateTime $dateSend
     * @return Messages
     */
    public function setDateSend($dateSend)
    {
        $this->dateSend = $dateSend;

        return $this;
    }

    /**
     * Get dateSend
     *
     * @return \DateTime 
     */
    public function getDateSend()
    {
        return $this->dateSend;
    }

    /**
     * Set dateReceive
     *
     * @param \DateTime $dateReceive
     * @return Messages
     */
    public function setDateReceive($dateReceive)
    {
        $this->dateReceive = $dateReceive;

        return $this;
    }

    /**
     * Get dateReceive
     *
     * @return \DateTime 
     */
    public function getDateReceive()
    {
        return $this->dateReceive;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Messages
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
     * Set idSender
     *
     * @param integer $idSender
     * @return Messages
     */
    public function setIdSender($idSender)
    {
        $this->idSender = $idSender;

        return $this;
    }

    /**
     * Get idSender
     *
     * @return integer
     */
    public function getIdSender()
    {
        return $this->idSender;
    }
}
?>
