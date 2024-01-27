<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class AliController extends AbstractController
{
    #[Route('/', name: 'app_ali')]
    public function index(): Response
    {
        return $this->render('ali/home.html.twig', [
            'controller_name' => 'AliController',
        ]);
    }

    #[Route('/cv', name: 'cv')]
    public function cv(): Response
    {
        return $this->render('ali/cv.html.twig', [
        ]);    
    }

    #[Route('/E-Portfolio', name: 'E-Portfolio')]
    public function portfolio(): Response
    {
        return $this->render('ali/E-Portfolio.html.twig', [
        ]);     
    }

    #[Route('/en_savoir_plus', name: 'en_savoir_plus')]
    public function enSavoirPlus(): Response
    {
        return $this->render('ali/en_savoir+.html.twig', [
        ]);    
    }    

    #[Route('/cv/download', name: 'cv_download')]
    public function downloadCV(): Response
    {
        $cvPath = $this->getParameter('kernel.project_dir') . '/public/CV.pdf';

        return $this->file($cvPath, 'CV.pdf', ResponseHeaderBag::DISPOSITION_ATTACHMENT);
    }
}
