<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\MessageRepository")
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="object", type="string", length=255)
     */
    private $object;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @ORM\ManyToOne(targetEntity="Appartment", inversedBy="messages")
     * @ORM\JoinColumn(name="appartment_id", referencedColumnName="id")
     */
    protected $appartment;

    /**
     * @ORM\ManyToOne(targetEntity="MessageStatus", inversedBy="messages")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    protected $status;


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
     * Set object
     *
     * @param string $object
     * @return Message
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return string 
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Message
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set appartment
     *
     * @param \AppBundle\Entity\Appartment $appartment
     * @return Message
     */
    public function setAppartment(\AppBundle\Entity\Appartment $appartment = null)
    {
        $this->appartment = $appartment;

        return $this;
    }

    /**
     * Get appartment
     *
     * @return \AppBundle\Entity\Appartment 
     */
    public function getAppartment()
    {
        return $this->appartment;
    }

    /**
     * Set status
     *
     * @param \AppBundle\Entity\MessageStatus $status
     * @return Message
     */
    public function setStatus(\AppBundle\Entity\MessageStatus $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \AppBundle\Entity\MessageStatus 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
