<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * countries
 *
 * @ORM\Table(name="star_rating")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\StarRatingSystemRepository")
 */
class StarRatingSystem
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
     * @var integer
     * @ORM\Column(name="produit_id", type="integer")
     * @ORM\JoinColumn(nullable=false)
     */
    private $produit;


    /**
     * @var integer
     *
     * @ORM\Column(name="rate", type="integer")
     */
    private $rate;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrrate", type="integer")
     */
    private $nbrrate;


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
     * Get produit
     * @return integer
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set produit
     * @param integer $produit
     * @return StarRatingSystem
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     *
     * @return starratingsystem
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set nbrrate
     *
     * @param integer $nbrrate
     *
     * @return starratingsystem
     */
    public function setNbrrate($nbrrate)
    {
        $this->nbrrate = $nbrrate;

        return $this;
    }

    /**
     * Get nbrrate
     *
     * @return integer
     */
    public function getNbrrate()
    {
        return $this->nbrrate;
    }
}