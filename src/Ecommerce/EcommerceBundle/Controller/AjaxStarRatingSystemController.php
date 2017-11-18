<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Cookie;
use Ecommerce\EcommerceBundle\Entity\StarRatingSystem;

class AjaxStarRatingSystemController extends Controller
{
    public function updateDataAction(Request $request)
    {
        $produit = $request->get('mediaId');
        $rate = $request->get('rate');

        $em = $this->getDoctrine()->getManager();
        $response = new JsonResponse();

        if ($produit && $rate) {

            $rateExists = $em->createQuery('SELECT s.id FROM EcommerceBundle:StarRatingSystem s 
                WHERE s.produit = :produit AND s.rate = :rate')
                ->setParameters(array('produit' => $produit , 'rate' => $rate))
                ->getResult();
            // var_dump($rateExists);

            if ($rateExists != null) {

                $q = $em->createQuery('UPDATE EcommerceBundle:StarRatingSystem s SET s.nbrrate = s.nbrrate + 1 WHERE s.produit = :produit AND s.rate = :rate')
                    ->setParameters(array('produit' => $produit, 'rate' => $rate));
                $q->execute();
            }
            else {
                $newRate = new StarRatingSystem();
                $newRate->setProduit($produit);
                $newRate->setRate($rate);
                $newRate->setNbrrate(1);
                $em->persist($newRate);
                $em->flush();
            }

            $query = $em->createQuery('SELECT s.rate, s.nbrrate FROM EcommerceBundle:StarRatingSystem s WHERE s.produit = :produit')
                ->setParameter('produit', $produit)
                ->getResult();

            if ($query != null) {
                $rateTotal = 0;
                $nbrrateTotal = 0;

                foreach ($query as $rating) {
                    $rateTotal += $rating['rate']*$rating['nbrrate'];
                    $nbrrateTotal += $rating['nbrrate'];

                }
            }

            $response->setData(array('avg' => round($rateTotal / $nbrrateTotal, 2), 'nbrRate' => $nbrrateTotal));
        }
        else{
            $response->setData(array('avg' => $produit));
        }

        return $response;
    }

    public function showDataAction(Request $request)
    {
        $produit = $request->get('mediaId');
        $numStar = $request->get('numStar');

        $em = $this->getDoctrine()->getManager();
        $response = new JsonResponse();

        if ($produit && $numStar) {

            $query = $em->createQuery('SELECT s.rate, s.nbrrate FROM EcommerceBundle:StarRatingSystem s WHERE s.produit = :produit')
                ->setParameter('produit', $produit)
                ->getResult();

            if ($query != null) {

                //variable pour le total du produit pour un article
                $rateTotal = 0;
                //variable pour le nombre total des vote pour un article
                $nbrrateTotal = 0;
                //variable pour le total par rate
                //$rateT = array('1' => 0,'2' => 0,'3' => 0,'4' => 0,'5' => 0);
                $rateT = array();
                //variable de nombre de vote par rate
                $nbrrate = array();
                //tableau des pourcentage
                $ratePourcentage = array();

                //Initialisation des tableaux
                for ($i=1; $i <= $numStar ; $i++) {
                    $rateT[$i] = 0;
                    $nbrrate[$i] = 0;
                }

                //Calcul des pourcentages et du produit
                foreach ($query as $rating) {

                    $rateTotal += $rating['rate']*$rating['nbrrate'];
                    $nbrrateTotal += $rating['nbrrate'];
                    //pourcentage
                    $rateT[$rating['rate']] = $rating['rate']*$rating['nbrrate'];
                    $nbrrate[$rating['rate']] = $rating['nbrrate'];
                }

                for ($i=1; $i <= $numStar ; $i++) {
                    $ratePourcentage[$i] = round($nbrrate[$i]*100/$nbrrateTotal, 2);
                }

            }

            /*var_dump($rateTotal);

            var_dump($rateT);
            var_dump($nbrrateTotal);
            var_dump($nbrrate);
            var_dump($ratePourcentage);
            die();*/


            $response->setData(array(
                'avg' => $rateTotal,
                'nbrRate' => $nbrrateTotal,
                'ratePourcentage' => $ratePourcentage,
                //'nbrRate' => $nbrrateTotal,
            ));
        }

        return $response;
    }
}
