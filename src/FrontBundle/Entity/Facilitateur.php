<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facilitateur
 *
 * @ORM\Table(name="facilitateur")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\FacilitateurRepository")
 */
class Facilitateur
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

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
     * @return Facilitateur
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
     *
     * @return Facilitateur
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
     *
     * @return Facilitateur
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
     * Set description
     *
     * @param string $description
     *
     * @return Facilitateur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set apport
     *
     * @param string $apport
     *
     * @return Facilitateur
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
     * @return Facilitateur
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

