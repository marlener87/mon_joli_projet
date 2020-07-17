<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200717091800 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, ref_bd VARCHAR(8) NOT NULL, heros VARCHAR(50) NOT NULL, titre VARCHAR(50) NOT NULL, prix_public NUMERIC(8, 2) NOT NULL, prix_editeur NUMERIC(8, 2) NOT NULL, resume LONGTEXT DEFAULT NULL, ref_fournisseur BIGINT DEFAULT NULL, ref_editeur BIGINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE produit');
    }
}
