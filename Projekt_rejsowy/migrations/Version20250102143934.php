<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250102143934 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create countries table';
    }

    public function up(Schema $schema): void
    {
        // Tylko tworzenie tabeli countries
        $this->addSql('CREATE TABLE countries (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(2) NOT NULL, name VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // Tylko usuwanie tabeli countries
        $this->addSql('DROP TABLE countries');
    }
}