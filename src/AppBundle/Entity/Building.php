<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Building
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\BuildingRepository")
 */
class Building
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
     * @ORM\Column(name="name", type="string", length=1)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Appartment", mappedBy="building")
     */
    protected $appartments;

    /**
     * @ORM\ManyToMany(targetEntity="Anounce", mappedBy="buildings")
     **/
    protected $anounces;

    public function __construct()
    {
        $this->appartments = new ArrayCollection();
        $this->anounces = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Building
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
     * Add appartments
     *
     * @param \AppBundle\Entity\Appartment $appartments
     * @return Building
     */
    public function addAppartment(\AppBundle\Entity\Appartment $appartments)
    {
        $this->appartments[] = $appartments;

        return $this;
    }

    /**
     * Remove appartments
     *
     * @param \AppBundle\Entity\Appartment $appartments
     */
    public function removeAppartment(\AppBundle\Entity\Appartment $appartments)
    {
        $this->appartments->removeElement($appartments);
    }

    /**
     * Get appartments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAppartments()
    {
        return $this->appartments;
    }

    /**
     * Add anounces
     *
     * @param \AppBundle\Entity\Anounce $anounces
     * @return Building
     */
    public function addAnounce(\AppBundle\Entity\Anounce $anounces)
    {
        $this->anounces[] = $anounces;

        return $this;
    }

    /**
     * Remove anounces
     *
     * @param \AppBundle\Entity\Anounce $anounces
     */
    public function removeAnounce(\AppBundle\Entity\Anounce $anounces)
    {
        $this->anounces->removeElement($anounces);
    }

    /**
     * Get anounces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnounces()
    {
        return $this->anounces;
    }
}
