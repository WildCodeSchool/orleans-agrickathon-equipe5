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
}

