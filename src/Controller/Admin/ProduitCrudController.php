<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use App\Entity\Produit;
use App\Entity\Auteur;
use App\Entity\Editeur;
use App\Entity\Fournisseur;
use App\Entity\Genre;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;


class ProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produit::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('ref_bd'),
            TextField::new('heros'),
            TextField::new('titre'),
            TextField::new('prix_public'),
            TextField::new('prix_editeur'),
            TextEditorField::new('resume'),
            TextField::new('ref_fournisseur'),
            TextField::new('ref_editeur'),
            AssociationField::new('auteur'),
            AssociationField::new('genre'),
            AssociationField::new('fournisseur'),
            AssociationField::new('editeur'),
        ];
    }
}
