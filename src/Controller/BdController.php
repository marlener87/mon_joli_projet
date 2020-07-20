<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Auteur;
use App\Repository\AuteurRepository;

class BdController extends AbstractController
{
    /**
     * @Route("/auteurs", name="bd")
     */
    public function index(AuteurRepository $repo)
    {
        $auteurs = $repo->findAll();
        
        return $this->render('bd/index.html.twig', [
            'controller_name' => 'BdController',
            'auteurs' => $auteurs
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('bd/home.html.twig', [
            'title' => "Bienvenue sur le site des BD !",
            'age' => 30
        ]);
    }

    /**
     * @Route("/bd/livre/1", name="bd_show")
     */
    public function show()
    {
        return $this->render('bd/show.html.twig');
    }

}
