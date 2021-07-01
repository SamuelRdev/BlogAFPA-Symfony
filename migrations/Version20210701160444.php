<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210701160444 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contract ADD types_id INT DEFAULT NULL, DROP types');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F28598EB23357 FOREIGN KEY (types_id) REFERENCES contract_type (id)');
        $this->addSql('CREATE INDEX IDX_E98F28598EB23357 ON contract (types_id)');
        $this->addSql('ALTER TABLE offer ADD categories_id INT NOT NULL, DROP contracts');
        $this->addSql('ALTER TABLE offer ADD CONSTRAINT FK_29D6873EA21214B7 FOREIGN KEY (categories_id) REFERENCES contract (id)');
        $this->addSql('CREATE INDEX IDX_29D6873EA21214B7 ON offer (categories_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F28598EB23357');
        $this->addSql('DROP INDEX IDX_E98F28598EB23357 ON contract');
        $this->addSql('ALTER TABLE contract ADD types VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP types_id');
        $this->addSql('ALTER TABLE offer DROP FOREIGN KEY FK_29D6873EA21214B7');
        $this->addSql('DROP INDEX IDX_29D6873EA21214B7 ON offer');
        $this->addSql('ALTER TABLE offer ADD contracts VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP categories_id');
    }
}
