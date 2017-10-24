<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\validator\Constraints as Assert;

/**
 * Quartiers
 *
 * @ORM\Table("quartiers")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\QuartiersRepository")
 */
class Quartiers{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="abrege", type="string", length=10)
     */
    private $abrege;

    /**
     * @var integer
     *
     * @ORM\Column(name="arrondissement", type="integer")
     */
    private $arrondissement;

    /**
     * @return mixed
     */
    public function getNom(){
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom){
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getAbrege(){
        return $this->abrege;
    }

    /**
     * @param string $abrege
     */
    public function setAbrege($abrege){
        $this->abrege = $abrege;
    }

    /**
     * @return int
     */
    public function getArrondissement(){
        return $this->arrondissement;
    }

    /**
     * @param int $arrondissement
     */
    public function setArrondissement($arrondissement){
        $this->arrondissement = $arrondissement;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId(){
        return $this->id;
    }

    function __toString(){
        return $this->nom;
    }

}
