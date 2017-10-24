<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table("categories")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\CategoriesRepository")
 */
class Categories{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Rayon", inversedBy="categories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $rayon;

    /**
     * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=125)
     */
    private $nom;
    
    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\SubCategories", mappedBy="categorie", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $subCategories;
    


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Categories
     */
    public function setNom($nom){
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom(){
        return $this->nom;
    }

    /**
     * Set image
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Media $image
     * @return Categories
     */
    public function setImage(\Ecommerce\EcommerceBundle\Entity\Media $image = null){
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Media 
     */
    public function getImage(){
        return $this->image;
    }
    
    public function __toString(){
        return $this->getNom();
    }

    /**
     * Constructor
     */
    public function __construct(){
        $this->subCategories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add subCategories
     *
     * @param \Ecommerce\EcommerceBundle\Entity\SubCategpries $subCategories
     * @return Categories
     */
    public function addSubCategory(\Ecommerce\EcommerceBundle\Entity\SubCategories $subCategories){
        $this->subCategories[] = $subCategories;

        return $this;
    }

    /**
     * Remove subCategories
     *
     * @param \Ecommerce\EcommerceBundle\Entity\SubCategpries $subCategories
     */
    public function removeSubCategory(\Ecommerce\EcommerceBundle\Entity\SubCategories $subCategories){
        $this->subCategories->removeElement($subCategories);
    }

    /**
     * Get subCategories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubCategories(){
        return $this->subCategories;
    }

    /**
     * Set rayon
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Rayon $rayon
     * @return Categories
     */
    public function setRayon(\Ecommerce\EcommerceBundle\Entity\Rayon $rayon){
        $this->rayon = $rayon;

        return $this;
    }

    /**
     * Get rayon
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Rayon 
     */
    public function getRayon(){
        return $this->rayon;
    }
}
