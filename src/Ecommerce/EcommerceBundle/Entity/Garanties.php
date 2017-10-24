<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Garanties
 *
 * @ORM\Table("garanties")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\GarantiesRepository")
 */
class Garanties{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Partenaires", inversedBy="garanties")
    * @ORM\JoinColumn(nullable=false)
    */
    private $partenaire;

    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\Produits", mappedBy="garantie", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $produits;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="valeur", type="integer")
     */
    private $valeur;

    /**
     * @var string
     *
     * @ORM\Column(name="periode", type="string", length=10)
     */
    private $periode;

    /**
     * @return mixed
     */
    public function getProduits(){
        return $this->produits;
    }

    /**
     * @param mixed $produits
     */
    public function setProduits($produits){
        $this->produits = $produits;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set periode
     *
     * @param string $periode
     * @return Garanties
     */
    public function setPeriode($periode){
        $this->periode = $periode;
        return $this;
    }

    /**
     * Get periode
     *
     * @return string
     */
    public function getPeriode(){
        return $this->periode;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Garanties
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
     * Set partenaire
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Partenaires $partenaire
     * @return Garanties
     */
    public function setPartenaire(\Ecommerce\EcommerceBundle\Entity\Partenaires $partenaire){
        $this->partenaire = $partenaire;
        return $this;
    }

    /**
     * Get partenaire
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Partenaires 
     */
    public function getPartenaire(){
        return $this->partenaire;
    }


    /**
     * @return int
     */
    public function getValeur(){
        return $this->valeur;
    }

    /**
     * @param int $valeur
     */
    public function setValeur($valeur){
        $this->valeur = $valeur;
    }

    /**
     * Add produits
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Produits $produit
     * @return Garanties
     */
    public function addProduit(\Ecommerce\EcommerceBundle\Entity\Produits $produit){
        $produit->setGarantie($this);
        $this->produits->add($produit);
        return $this;
    }

    /**
     * Remove produits
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Produits $produit
     */
    public function removeProduit(\Ecommerce\EcommerceBundle\Entity\Produits $produit){
        $this->produits->removeElement($produit);
    }

    function __toString(){
        return $this->getNom();
    }
}
