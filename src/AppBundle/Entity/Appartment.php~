<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Appartment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\AppartmentRepository")
 */
class Appartment
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
     * @ORM\Column(name="number", type="string", length=5)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="text")
     */
    private $code;

    /**
     * @ORM\ManyToOne(targetEntity="Building", inversedBy="appartments")
     * @ORM\JoinColumn(name="building_id", referencedColumnName="id")
     */
    protected $building;

    /**
     * @ORM\OneToMany(targetEntity="Message", mappedBy="appartment")
     */
    protected $messages;

    public function __construct()
    {
        $this->messages = new ArrayCollection();
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
     * Set number
     *
     * @param string $number
     * @return Appartment
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Appartment
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Appartment
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Appartment
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Appartment
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set building
     *
     * @param \AppBundle\Entity\Building $building
     * @return Appartment
     */
    public function setBuilding(\AppBundle\Entity\Building $building = null)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building
     *
     * @return \AppBundle\Entity\Building 
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Add messages
     *
     * @param \AppBundle\Entity\Message $messages
     * @return Appartment
     */
    public function addMessage(\AppBundle\Entity\Message $messages)
    {
        $this->messages[] = $messages;

        return $this;
    }

    /**
     * Remove messages
     *
     * @param \AppBundle\Entity\Message $messages
     */
    public function removeMessage(\AppBundle\Entity\Message $messages)
    {
        $this->messages->removeElement($messages);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessages()
    {
        return $this->messages;
    }
}
