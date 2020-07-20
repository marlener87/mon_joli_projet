<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200720080646 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fournisseur ADD editeur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fournisseur ADD CONSTRAINT FK_369ECA323375BD21 FOREIGN KEY (editeur_id) REFERENCES editeur (id)');
        $this->addSql('CREATE INDEX IDX_369ECA323375BD21 ON fournisseur (editeur_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fournisseur DROP FOREIGN KEY FK_369ECA323375BD21');
        $this->addSql('DROP INDEX IDX_369ECA323375BD21 ON fournisseur');
        $this->addSql('ALTER TABLE fournisseur DROP editeur_id');
    }
}
