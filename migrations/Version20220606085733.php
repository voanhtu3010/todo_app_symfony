<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220606085733 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE todo ADD tag_id INT NOT NULL');
        $this->addSql('ALTER TABLE todo ADD CONSTRAINT FK_5A0EB6A0BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id)');
        $this->addSql('CREATE INDEX IDX_5A0EB6A0BAD26311 ON todo (tag_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE todo DROP FOREIGN KEY FK_5A0EB6A0BAD26311');
        $this->addSql('DROP INDEX IDX_5A0EB6A0BAD26311 ON todo');
        $this->addSql('ALTER TABLE todo DROP tag_id');
    }
}
