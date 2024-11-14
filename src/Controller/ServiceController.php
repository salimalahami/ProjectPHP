<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
    //#[Route('/test')]
//function Test(){
   // return new Response('bonjour 4SE');
//}
#[Route('/test/{classe}')]
function Test($classe){
    //return new Response('<h1>bonjour <i>'.$classe.'</i></h1>');
    return $this->render('service/Test.html.twig',[
        'c'=>$classe
    ]);
}

}

