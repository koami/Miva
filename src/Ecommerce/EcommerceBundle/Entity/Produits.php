<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table("produits")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\ProduitsRepository")
 */
class Produits
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
     * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Garanties", inversedBy="produits")
     * @ORM\JoinColumn(nullable=true)
     */
    private $garantie;

    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\SubCategories", inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $subCategorie;
    
    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Partenaires", inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $partenaire;

    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\Descriptions", mappedBy="produit", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $descriptions;

    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\Commentaires", mappedBy="produit", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $commentaires;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=125)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="reduction", type="integer", nullable = true)
     */
    private $reduction;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->descriptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Produits
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
     * Set prix
     *
     * @param float $prix
     * @return Produits
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Produits
     */
    public function setQuantite($quantite)
    {
        $this->quantite= $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set image
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Media $image
     * @return Produits
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
     * Set subCategorie
     *
     * @param \Ecommerce\EcommerceBundle\Entity\SubCategories $subCategorie
     * @return Produits
     */
    public function setSubCategorie(\Ecommerce\EcommerceBundle\Entity\SubCategories $subCategorie)
    {
        $this->subCategorie = $subCategorie;

        return $this;
    }

    /**
     * Get subCategorie
     *
     * @return \Ecommerce\EcommerceBundle\Entity\SubCategories 
     */
    public function getSubCategorie()
    {
        return $this->subCategorie;
    }

    /**
     * @return mixed
     */
    public function getGarantie()
    {
        return $this->garantie;
    }

    /**
     * @return mixed
     */
    public function getPartenaire()
    {
        return $this->partenaire;
    }

    /**
     * @param mixed $partenaire
     */
    public function setPartenaire($partenaire)
    {
        $this->partenaire = $partenaire;
    }

    /**
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * @param mixed $descriptions
     */
    public function setDescriptions($descriptions)
    {
        $this->descriptions = $descriptions;
    }

    /**
     * @return mixed
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * @param mixed $commentaires
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;
    }

    /**
     * @param mixed $garantie
     */
    public function setGarantie($garantie)
    {
        $this->garantie = $garantie;
    }

    /**
     * Add descriptions
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Descriptions $description
     * @return Produits
     */
    public function addDescription(\Ecommerce\EcommerceBundle\Entity\Descriptions $description)
    {
        $description->setProduit($this);
        $this->descriptions->add($description);

        return $this;
    }

    /**
     * Remove descriptions
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Descriptions $description
     */
    public function removeDescription(\Ecommerce\EcommerceBundle\Entity\Descriptions $description)
    {
        $this->descriptions->removeElement($description);
    }

    /**
     * Add commentaires
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Commentaires $commentaires
     * @return Produits
     */
    public function addCommentaire(\Ecommerce\EcommerceBundle\Entity\Commentaires $commentaires)
    {
        $this->commentaires[] = $commentaires;

        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Commentaires $commentaires
     */
    public function removeCommentaire(\Ecommerce\EcommerceBundle\Entity\Commentaires $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }
    /**
     * @return int
     */
    public function getReduction()
    {
        return $this->reduction;
    }

    /**
     * @param int $reduction
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;
    }
}
