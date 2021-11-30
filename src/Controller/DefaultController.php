<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\GrumpyPizzaRepository;

class DefaultController extends AbstractController
{
	#[Route(path: '/', name: 'home')]
    public function indexAction(GrumpyPizzaRepository $repo): Response
    {
        return new Response('ok');
    }
}