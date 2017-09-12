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

        $rateExists = $em->createQuery('SELECT s.id FROM EcommerceBundle:StarRatingSystem s WHERE s.produit = :produit')
            ->setParameter('produit', $produit)
            ->getResult();

        if ($rateExists != null) {
            $q = $em->createQuery('UPDATE EcommerceBundle:StarRatingSystem s SET s.rate = s.rate + '.$rate.', s.nbrrate = s.nbrrate + 1 WHERE s.produit = ?1')
                ->setParameter(1, $produit);
            $q->execute();
        } else {
            $newRate = new StarRatingSystem();
            $newRate->setProduit($produit);
            $newRate->setRate($rate);
            $newRate->setNbrrate(1);
            $em->persist($newRate);
            $em->flush();
        }

        $query = $em->createQuery('SELECT s.rate, s.nbrrate FROM EcommerceBundle:StarRatingSystem s WHERE s.produit = :produit')
            ->setParameter('produit', $produit);
        $result = $query->getResult();

        $response = new JsonResponse();
        $response->setData(array('avg' => round($result[0]['rate'] / $result[0]['nbrrate'], 2), 'nbrRate' => $result[0]['nbrrate']));
        return $response;
    }
}
