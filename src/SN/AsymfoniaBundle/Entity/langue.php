<?php

namespace SN\AsymfoniaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * langue
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SN\AsymfoniaBundle\Entity\langueRepository")
 */
class langue
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
     * @var integer
     *
     * @ORM\Column(name="id_langue", type="integer")
     */
    private $idLangue;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=255)
     */
    private $langue;

    /**
     * @var string
     *
     * @ORM\Column(name="langueDestinataire", type="string", length=255)
     */
    private $langueDestinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="motsource", type="string", length=255)
     */
    private $motsource;

    /**
     * @var string
     *
     * @ORM\Column(name="motdestinataire", type="string", length=255)
     */
    private $motdestinataire;


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
     * Set idLangue
     *
     * @param integer $idLangue
     * @return langue
     */
    public function setIdLangue($idLangue)
    {
        $this->idLangue = $idLangue;
    
        return $this;
    }

    /**
     * Get idLangue
     *
     * @return integer 
     */
    public function getIdLangue()
    {
        return $this->idLangue;
    }

    /**
     * Set langue
     *
     * @param string $langue
     * @return langue
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;
    
        return $this;
    }

    /**
     * Get langue
     *
     * @return string 
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set langueDestinataire
     *
     * @param string $langueDestinataire
     * @return langue
     */
    public function setLangueDestinataire($langueDestinataire)
    {
        $this->langueDestinataire = $langueDestinataire;
    
        return $this;
    }

    /**
     * Get langueDestinataire
     *
     * @return string 
     */
    public function getLangueDestinataire()
    {
        return $this->langueDestinataire;
    }

    /**
     * Set motsource
     *
     * @param string $motsource
     * @return langue
     */
    public function setMotsource($motsource)
    {
        $this->motsource = $motsource;
    
        return $this;
    }

    /**
     * Get motsource
     *
     * @return string 
     */
    public function getMotsource()
    {
        return $this->motsource;
    }

    /**
     * Set motdestinataire
     *
     * @param string $motdestinataire
     * @return langue
     */
    public function setMotdestinataire($motdestinataire)
    {
        $this->motdestinataire = $motdestinataire;
    
        return $this;
    }

    /**
     * Get motdestinataire
     *
     * @return string 
     */
    public function getMotdestinataire()
    {
        return $this->motdestinataire;
    }
}
