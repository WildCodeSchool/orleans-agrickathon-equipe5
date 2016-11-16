<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag2
 *
 * @ORM\Table(name="tag2")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\Tag2Repository")
 */
class Tag2
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
     * @ORM\Column(name="tag", type="string", length=255)
     */
    private $tag;

    /**
     * @ORM\ManyToMany(targetEntity="Entreprise", mappedBy="entreprises")
     */
    private $entreprises;

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
     * Set tag
     *
     * @param string $tag
     *
     * @return Tag2
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entreprises = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add entreprise
     *
     * @param \FrontBundle\Entity\Entreprise $entreprise
     *
     * @return Tag2
     */
    public function addEntreprise(\FrontBundle\Entity\Entreprise $entreprise)
    {
        $this->entreprises[] = $entreprise;

        return $this;
    }

    /**
     * Remove entreprise
     *
     * @param \FrontBundle\Entity\Entreprise $entreprise
     */
    public function removeEntreprise(\FrontBundle\Entity\Entreprise $entreprise)
    {
        $this->entreprises->removeElement($entreprise);
    }

    /**
     * Get entreprises
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEntreprises()
    {
        return $this->entreprises;
    }
}
