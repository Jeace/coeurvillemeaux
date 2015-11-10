<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Anounce
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\AnounceRepository")
 */
class Anounce
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
     * @ORM\ManyToMany(targetEntity="Building", inversedBy="anounces")
     * @ORM\JoinTable(name="buildings_anounces")
     **/
    protected $buildings;



    public function __construct()
    {
        $this->buildings = new ArrayCollection();
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
     * Set object
     *
     * @param string $object
     * @return Anounce
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
     * @return Anounce
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
     * Add buildings
     *
     * @param \AppBundle\Entity\Building $buildings
     * @return Anounce
     */
    public function addBuilding(\AppBundle\Entity\Building $buildings)
    {
        $this->buildings[] = $buildings;

        return $this;
    }

    /**
     * Remove buildings
     *
     * @param \AppBundle\Entity\Building $buildings
     */
    public function removeBuilding(\AppBundle\Entity\Building $buildings)
    {
        $this->buildings->removeElement($buildings);
    }

    /**
     * Get buildings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBuildings()
    {
        return $this->buildings;
    }
}
