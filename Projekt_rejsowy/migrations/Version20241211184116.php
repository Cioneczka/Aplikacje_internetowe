<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241211184116 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user CHANGE password password VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user_role DROP FOREIGN KEY FK_2DE8C6A358E0A285');
        $this->addSql('DROP INDEX IDX_2DE8C6A358E0A285 ON user_role');
        $this->addSql('ALTER TABLE user_role ADD user_id INT NOT NULL, DROP userid_id, CHANGE role_id role_id INT NOT NULL');
        $this->addSql('ALTER TABLE user_role ADD CONSTRAINT FK_2DE8C6A3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_2DE8C6A3A76ED395 ON user_role (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user CHANGE password password VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE user_role DROP FOREIGN KEY FK_2DE8C6A3A76ED395');
        $this->addSql('DROP INDEX IDX_2DE8C6A3A76ED395 ON user_role');
        $this->addSql('ALTER TABLE user_role ADD userid_id INT DEFAULT NULL, DROP user_id, CHANGE role_id role_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user_role ADD CONSTRAINT FK_2DE8C6A358E0A285 FOREIGN KEY (userid_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_2DE8C6A358E0A285 ON user_role (userid_id)');
    }
}
