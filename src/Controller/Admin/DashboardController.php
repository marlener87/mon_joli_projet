<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Auteur;
use App\Entity\Produit;
use App\Entity\Fournisseur;
use App\Entity\Genre;
use App\Entity\Editeur;


class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();

        return $this->redirect($routeBuilder->setController(AuteurCrudController::class)->generateUrl());
        /*return parent::index();*/

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Tableau de bord');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoRoute('Accueil', 'fa fa-home', 'home');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-user', User::class);
        yield MenuItem::section('Mes BD');
        yield MenuItem::linktoCrud('Auteur', 'fas fa-pen-alt', Auteur::class);
        yield MenuItem::linktoCrud('Editeur', 'fas fa-book', Editeur::class);
        yield MenuItem::linktoCrud('Fournisseur', 'fas fa-truck-loading', Fournisseur::class);
        yield MenuItem::linktoCrud('Genre', 'fas fa-list-alt', Genre::class);
        yield MenuItem::linktoCrud('Produit', 'fas fa-book', Produit::class);
        
        
        
        // yield MenuItem::linkToCrud('The Label', 'icon class', EntityClass::class);
    }
}