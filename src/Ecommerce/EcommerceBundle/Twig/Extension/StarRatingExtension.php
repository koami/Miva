<?php
namespace Ecommerce\EcommerceBundle\Twig\Extension;

use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;

class StarRatingExtension extends \Twig_Extension
{
    protected $doctrine;
    private $request;

    public function __construct(RegistryInterface $doctrine, Request $request)
    {
        $this->doctrine = $doctrine;
        $this->request = $request;
    }

    public function getFunctions() {
        return array(
            'starBar' => new \Twig_Function_Method($this, 'myStarBar'),
        );
    }

    public function myStarBar($numStar, $produit, $starWidth) {

        $cookies = $this->request->cookies->get('symfonyRatingSystem'.$produit);

        $nbrPixelsInDiv = $numStar * $starWidth; // Calculate the DIV width in pixel

        $query = $this->doctrine->getRepository('EcommerceBundle:StarRatingSystem')->findOneBy(array('produit' => $produit));

        if (isset($query)) {
            $average = round($query->getRate()/$query->getNbrrate(), 2);
            $nbrRate = $query->getNbrrate();
        } else {
            $average = 0;
            $nbrRate = 0;
        }

        //num of pixel to colorize (in yellow)
        $numEnlightedPX = round($nbrPixelsInDiv * $average / $numStar, 0);

        $getJSON = array('numStar' => $numStar, 'produit' => $produit); // We create a JSON with the number of stars and the media ID
        $getJSON = json_encode($getJSON);

        $starBar = '<div id="group'.$produit.'">';
        $starBar .= '<div class="star_bar" style="width:'.$nbrPixelsInDiv.'px; height:'.$starWidth.'px; background: linear-gradient(to right, #5E0F0F 0px,#5E0F0F '.$numEnlightedPX.'px,#ccc '.$numEnlightedPX.'px,#ccc '.$nbrPixelsInDiv.'px);" rel='.$getJSON.'>';
        for ($i=1; $i<=$numStar; $i++) {
            $starBar .= '<div title="'.$i.'/'.$numStar.'" id="'.$i.'" class="star"';
            if( !$cookies )
                $starBar .= ' onmouseover="overStar('.$produit.', '.$i.', '.$numStar.');" onmouseout="outStar('.$produit.', '.$i.', '.$numStar.');" onclick="rateMedia('.$produit.', '.$i.', '.$numStar.', '.$starWidth.');"';
            $starBar .= '></div>';
        }
        $starBar .= '</div>';
        $starBar .= '<div class="resultMedia'.$produit.'" style="font-size: small; color: grey">'; // We show the rate score and number of rates
        if (!isset($query)) $starBar .= '';
        else $starBar .= 'Rating: ' . $average . '/' . $numStar . ' (' . $nbrRate . ' votes)';
        $starBar .= '</div>';
        $starBar .= '<div class="box'.$produit.'"></div>';
        $starBar .= '</div>';

        return $starBar;
    }

    public function getName()
    {
        return 'StarRating_extension';
    }
}