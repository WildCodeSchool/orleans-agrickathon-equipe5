<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\EntrepriseRepository")
 */
class Entreprise
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
     * @ORM\Column(name="identification", type="string", length=255)
     */
    private $identification;

    /**
     * @var string
     *
     * @ORM\Column(name="apport", type="string", length=255)
     */
    private $apport;

    /**
     * @var string
     *
     * @ORM\Column(name="rse", type="string", length=255)
     */
    private $rse;

    /**
     * @ORM\ManyToMany(targetEntity="Tag1", inversedBy="entreprises1")
     */
    private $tags1;

    /**
     * @ORM\ManyToMany(targetEntity="Tag2", inversedBy="entreprises2")
     */
    private $tags2;

    /**
     * @ORM\ManyToMany(targetEntity="Tag3", inversedBy="entreprises3")
     */
    private $tags3;

    /**
     * @ORM\ManyToMany(targetEntity="Tag4", inversedBy="entreprises4")
     */
    private $tags4;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Entreprise
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
     * Set identification
     *
     * @param string $identification
     *
     * @return Entreprise
     */
    public function setIdentification($identification)
    {
        $this->identification = $identification;

        return $this;
    }

    /**
     * Get identification
     *
     * @return string
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * Set apport
     *
     * @param string $apport
     *
     * @return Entreprise
     */
    public function setApport($apport)
    {
        $this->apport = $apport;

        return $this;
    }

    /**
     * Get apport
     *
     * @return string
     */
    public function getApport()
    {
        return $this->apport;
    }

    /**
     * Set rse
     *
     * @param string $rse
     *
     * @return Entreprise
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
     * Constructor
     */
    public function __construct()
    {
        $this->tags1 = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tags1
     *
     * @param \FrontBundle\Entity\Tag1 $tags1
     *
     * @return Entreprise
     */
    public function addTags1(\FrontBundle\Entity\Tag1 $tags1)
    {
        $this->tags1[] = $tags1;

        return $this;
    }

    /**
     * Remove tags1
     *
     * @param \FrontBundle\Entity\Tag1 $tags1
     */
    public function removeTags1(\FrontBundle\Entity\Tag1 $tags1)
    {
        $this->tags1->removeElement($tags1);
    }

    /**
     * Get tags1
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags1()
    {
        return $this->tags1;
    }

    /**
     * Add tags2
     *
     * @param \FrontBundle\Entity\Tag2 $tags2
     *
     * @return Entreprise
     */
    public function addTags2(\FrontBundle\Entity\Tag2 $tags2)
    {
        $this->tags2[] = $tags2;

        return $this;
    }

    /**
     * Remove tags2
     *
     * @param \FrontBundle\Entity\Tag2 $tags2
     */
    public function removeTags2(\FrontBundle\Entity\Tag2 $tags2)
    {
        $this->tags2->removeElement($tags2);
    }

    /**
     * Get tags2
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags2()
    {
        return $this->tags2;
    }

    /**
     * Add tags3
     *
     * @param \FrontBundle\Entity\Tag3 $tags3
     *
     * @return Entreprise
     */
    public function addTags3(\FrontBundle\Entity\Tag3 $tags3)
    {
        $this->tags3[] = $tags3;

        return $this;
    }

    /**
     * Remove tags3
     *
     * @param \FrontBundle\Entity\Tag3 $tags3
     */
    public function removeTags3(\FrontBundle\Entity\Tag3 $tags3)
    {
        $this->tags3->removeElement($tags3);
    }

    /**
     * Get tags3
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags3()
    {
        return $this->tags3;
    }

    /**
     * Add tags4
     *
     * @param \FrontBundle\Entity\Tag4 $tags4
     *
     * @return Entreprise
     */
    public function addTags4(\FrontBundle\Entity\Tag4 $tags4)
    {
        $this->tags4[] = $tags4;

        return $this;
    }

    /**
     * Remove tags4
     *
     * @param \FrontBundle\Entity\Tag4 $tags4
     */
    public function removeTags4(\FrontBundle\Entity\Tag4 $tags4)
    {
        $this->tags4->removeElement($tags4);
    }

    /**
     * Get tags4
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags4()
    {
        return $this->tags4;
    }
}
