<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VipController extends AbstractController
{
    #[Route('/vip', name: 'app_vip')]
    #[IsGranted('VOTER_VIP')]
    public function index(): Response
    {
        return $this->render('vip/index.html.twig', [
            'controller_name' => 'VipController',
        ]);
    }
}
