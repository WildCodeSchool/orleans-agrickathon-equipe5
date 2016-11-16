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
     * @ORM\Column(name="rse", type="string", length=255)
     */
    private $rse;


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
}
