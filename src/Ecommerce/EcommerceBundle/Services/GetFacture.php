<?php
namespace Ecommerce\EcommerceBundle\Services;

use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

class GetFacture 
{
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    
    public function facture($facture)
    {
        $html = $this->container->get('templating')->render('UtilisateursBundle:Default:layout/facturePDF.html.twig', array('facture' => $facture));
        
        $html2pdf = new Html2Pdf('P','A4','fr');
        $html2pdf->pdf->SetAuthor('Miva');
        $html2pdf->pdf->SetTitle('Facture '.$facture->getReference());
        $html2pdf->pdf->SetSubject('Facture Miva');
        $html2pdf->pdf->SetKeywords('facture,miva');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);
        
        return $html2pdf;
    }
}