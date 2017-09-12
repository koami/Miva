<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rayon
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\RayonRepository")
 */
class Rayon
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
     * @ORM\Column(name="nom", type="string", length=125)
     */
    private $nom;

    /**
     * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\Categories", mappedBy="rayon", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $categories;
 
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
     * @return Rayon
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
     * Set icon
     *
     * @param string $icon
     * @return Rayon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set image
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Media $image
     * @return Rayon
     */
    public function setImage(\Ecommerce\EcommerceBundle\Entity\Media $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Media 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add categories
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Categories $categories
     * @return Rayon
     */
    public function addCategory(\Ecommerce\EcommerceBundle\Entity\Categories $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Categories $categories
     */
    public function removeCategory(\Ecommerce\EcommerceBundle\Entity\Categories $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }
    
    public function __toString(){
        return $this->getNom();
    }
        
}
