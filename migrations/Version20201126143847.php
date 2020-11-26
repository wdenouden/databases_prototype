<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201126143847 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE location_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE organization_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE transaction_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE transaction_product_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE transaction_product_new_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE location (id INT NOT NULL, uuid VARCHAR(255) NOT NULL, fuelpass_identifier VARCHAR(255) DEFAULT NULL, name VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, spin_id INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE organization (id INT NOT NULL, uuid VARCHAR(255) NOT NULL, fuelpass_identifier VARCHAR(255) DEFAULT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE transaction (id INT NOT NULL, trans_id BIGINT DEFAULT NULL, type INT NOT NULL, status INT DEFAULT NULL, time TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, pos_id INT NOT NULL, pos_name VARCHAR(255) DEFAULT NULL, location_id INT NOT NULL, organization_id INT DEFAULT NULL, ref INT DEFAULT NULL, user_id INT DEFAULT NULL, user_name VARCHAR(255) DEFAULT NULL, is_refund BOOLEAN DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE transaction_product (id INT NOT NULL, transaction_id INT DEFAULT NULL, product_id INT NOT NULL, name VARCHAR(255) DEFAULT NULL, barcode VARCHAR(255) DEFAULT NULL, price INT NOT NULL, quantity NUMERIC(11, 3) NOT NULL, unit_type INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A5E0384F2FC0CB0F ON transaction_product (transaction_id)');
        $this->addSql('CREATE TABLE transaction_product_new (id INT NOT NULL, transaction_product_id INT NOT NULL, product_id INT NOT NULL, name VARCHAR(255) DEFAULT NULL, barcode VARCHAR(255) DEFAULT NULL, price INT NOT NULL, quantity NUMERIC(11, 3) NOT NULL, unit_type INT NOT NULL, transaction_id INT NOT NULL, trans_id BIGINT DEFAULT NULL, type INT NOT NULL, status INT DEFAULT NULL, time TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, pos_id INT NOT NULL, pos_name VARCHAR(255) DEFAULT NULL, location_id INT NOT NULL, location_name VARCHAR(255) DEFAULT NULL, organization_id INT DEFAULT NULL, organization_name VARCHAR(255) DEFAULT NULL, ref INT DEFAULT NULL, user_id INT DEFAULT NULL, user_name VARCHAR(255) DEFAULT NULL, is_refund BOOLEAN DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE transaction_product ADD CONSTRAINT FK_A5E0384F2FC0CB0F FOREIGN KEY (transaction_id) REFERENCES transaction (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE transaction_product DROP CONSTRAINT FK_A5E0384F2FC0CB0F');
        $this->addSql('DROP SEQUENCE location_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE organization_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE transaction_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE transaction_product_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE transaction_product_new_id_seq CASCADE');
        $this->addSql('DROP TABLE location');
        $this->addSql('DROP TABLE organization');
        $this->addSql('DROP TABLE transaction');
        $this->addSql('DROP TABLE transaction_product');
        $this->addSql('DROP TABLE transaction_product_new');
    }
}
