<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200717094629 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2775F8742E');
        $this->addSql('DROP INDEX IDX_29A5EC2775F8742E ON produit');
        $this->addSql('ALTER TABLE produit CHANGE auteur_id_id auteur_id INT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2760BB6FE6 FOREIGN KEY (auteur_id) REFERENCES auteur (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC2760BB6FE6 ON produit (auteur_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2760BB6FE6');
        $this->addSql('DROP INDEX IDX_29A5EC2760BB6FE6 ON produit');
        $this->addSql('ALTER TABLE produit CHANGE auteur_id auteur_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2775F8742E FOREIGN KEY (auteur_id_id) REFERENCES auteur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_29A5EC2775F8742E ON produit (auteur_id_id)');
    }
}
