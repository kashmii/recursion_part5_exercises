<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateCarTable implements SchemaMigration
{
  public function up(): array
  {
    return [
      "CREATE TABLE cars (
        id INT PRIMARY KEY AUTO_INCREMENT,
        make VARCHAR(255) NOT NULL,
        model VARCHAR(255) NOT NULL,
        year INT NOT NULL,
        color VARCHAR(50) NOT NULL,
        price DECIMAL(12, 2) NOT NULL,
        mileage DECIMAL(12, 2) NOT NULL,
        transmission VARCHAR(50) NOT NULL,
        engine VARCHAR(50) NOT NULL,
        status VARCHAR(50) NOT NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )"
    ];
  }

  public function down(): array
  {
    return [
      "DROP TABLE cars"
    ];
  }
}