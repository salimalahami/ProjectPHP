<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }
    #[Route('/show/{name}')]
    function showauthor($name){
        return $this->render('author/show.html.twig',['n'=>$name]);

    }
    #[Route('/list')]

    function ListeAuthor(){
        $authors = array(
            array('id' => 1, 'picture' => '/image/iss0.png','username' => 'Victor Hugo', 'email' =>
            'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/image/iss0.png','username' => ' William Shakespeare', 'email' =>
            ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/image/iss0.png','username' => 'Taha Hussein', 'email' =>
            'taha.hussein@gmail.com', 'nb_books' => 300),
        );
        return $this->render('author/list.html.twig',
        ['aa'=>$authors]
    );

    }
    #[Route('/temp')]
    function showtemplate(){
        return $this->render('base.html.twig');

    }
    #[Route('/Admin')]
    function showAdmin(){
        return $this->render('baseAdmin.html.twig');

    }
}
