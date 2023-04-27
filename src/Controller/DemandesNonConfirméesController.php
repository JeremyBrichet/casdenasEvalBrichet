<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemandesNonConfirméesController extends AbstractController
{
    #[Route('/demandes/non/confirmees', name: 'app_demandes_non_confirmees')]
    public function index(): Response
    {
        $dateConfirmation = null;


        return $this->render('demandesnonconfirmees.html.twig', [
            'controller_name' => 'DemandesNonConfirméesController',
        ]);
    }
}
