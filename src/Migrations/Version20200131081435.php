<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200131081435 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE registration ADD user_id INT DEFAULT NULL, ADD lesson_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A7CDF80196 FOREIGN KEY (lesson_id) REFERENCES lesson (id)');
        $this->addSql('CREATE INDEX IDX_62A8A7A7A76ED395 ON registration (user_id)');
        $this->addSql('CREATE INDEX IDX_62A8A7A7CDF80196 ON registration (lesson_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A7A76ED395');
        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A7CDF80196');
        $this->addSql('DROP INDEX IDX_62A8A7A7A76ED395 ON registration');
        $this->addSql('DROP INDEX IDX_62A8A7A7CDF80196 ON registration');
        $this->addSql('ALTER TABLE registration DROP user_id, DROP lesson_id');
    }
}
