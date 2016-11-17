<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Startup
 *
 * @ORM\Table(name="startup")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\StartupRepository")
 */
class Startup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="technologie", type="string", length=255)
     */
    private $technologie;

    /**
     * @var string
     *
     * @ORM\Column(name="productivite", type="string", length=255)
     */
    private $productivite;

    /**
     * @var string
     *
     * @ORM\Column(name="rse", type="string", length=255)
     */
    private $rse;

    /**
     * @var string
     *
     * @ORM\Column(name="gain", type="string", length=255)
     */
    private $gain;

    /**
     * @ORM\ManyToMany(targetEntity="Tag1", inversedBy="startups")
     */
    private $tags5;

    /**
     * @ORM\ManyToMany(targetEntity="Tag2", inversedBy="startups")
     */
    private $tags6;

    /**
     * @ORM\ManyToMany(targetEntity="Tag3", inversedBy="startups")
     */
    private $tags7;

    /**
     * @ORM\ManyToMany(targetEntity="Tag4", inversedBy="startups")
     */
    private $tags8;

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
     * Set nom
     *
     * @param string $nom
     * @return Startup
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
     * Set adresse
     *
     * @param string $adresse
     * @return Startup
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return Startup
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set technologie
     *
     * @param string $technologie
     * @return Startup
     */
    public function setTechnologie($technologie)
    {
        $this->technologie = $technologie;

        return $this;
    }

    /**
     * Get technologie
     *
     * @return string 
     */
    public function getTechnologie()
    {
        return $this->technologie;
    }

    /**
     * Set rse
     *
     * @param string $rse
     * @return Startup
     */
    public function setRse($rse)
    {
        $this->rse = $rse;

        return $this;
    }

    /**
     * Get rse
     *
     * @return string 
     */
    public function getRse()
    {
        return $this->rse;
    }

    /**
     * Set productivite
     *
     * @param string $productivite
     *
     * @return Startup
     */
    public function setProductivite($productivite)
    {
        $this->productivite = $productivite;

        return $this;
    }

    

    /**
     * Set gain
     *
     * @param string $gain
     *
     * @return Startup
     */
    public function setGain($gain)
    {
        $this->gain = $gain;

        return $this;
    }

    /**
     * Get gain
     *
     * @return string
     */
    public function getGain()
    {
        return $this->gain;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags5 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags6 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags7 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags8 = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tags5
     *
     * @param \FrontBundle\Entity\Tag1 $tags5
     *
     * @return Startup
     */
    public function addTags5(\FrontBundle\Entity\Tag1 $tags5)
    {
        $this->tags5[] = $tags5;

        return $this;
    }

    /**
     * Remove tags5
     *
     * @param \FrontBundle\Entity\Tag1 $tags5
     */
    public function removeTags5(\FrontBundle\Entity\Tag1 $tags5)
    {
        $this->tags5->removeElement($tags5);
    }

    /**
     * Get tags5
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags5()
    {
        return $this->tags5;
    }

    /**
     * Add tags6
     *
     * @param \FrontBundle\Entity\Tag2 $tags6
     *
     * @return Startup
     */
    public function addTags6(\FrontBundle\Entity\Tag2 $tags6)
    {
        $this->tags6[] = $tags6;

        return $this;
    }

    /**
     * Remove tags6
     *
     * @param \FrontBundle\Entity\Tag2 $tags6
     */
    public function removeTags6(\FrontBundle\Entity\Tag2 $tags6)
    {
        $this->tags6->removeElement($tags6);
    }

    /**
     * Get tags6
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags6()
    {
        return $this->tags6;
    }

    /**
     * Add tags7
     *
     * @param \FrontBundle\Entity\Tag3 $tags7
     *
     * @return Startup
     */
    public function addTags7(\FrontBundle\Entity\Tag3 $tags7)
    {
        $this->tags7[] = $tags7;

        return $this;
    }

    /**
     * Remove tags7
     *
     * @param \FrontBundle\Entity\Tag3 $tags7
     */
    public function removeTags7(\FrontBundle\Entity\Tag3 $tags7)
    {
        $this->tags7->removeElement($tags7);
    }

    /**
     * Get tags7
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags7()
    {
        return $this->tags7;
    }

    /**
     * Add tags8
     *
     * @param \FrontBundle\Entity\Tag4 $tags8
     *
     * @return Startup
     */
    public function addTags8(\FrontBundle\Entity\Tag4 $tags8)
    {
        $this->tags8[] = $tags8;

        return $this;
    }

    /**
     * Remove tags8
     *
     * @param \FrontBundle\Entity\Tag4 $tags8
     */
    public function removeTags8(\FrontBundle\Entity\Tag4 $tags8)
    {
        $this->tags8->removeElement($tags8);
    }

    /**
     * Get tags8
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags8()
    {
        return $this->tags8;
    }
}
