<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateCategoryTable1 implements SchemaMigration
{
  public function up(): array
  {
    return [
      "CREATE TABLE categories (
        id INT PRIMARY KEY AUTO_INCREMENT,
        category_name VARCHAR(50)
      )"
    ];
  }

  public function down(): array
  {
    return [
      "DROP TABLE categories"
    ];
  }
}