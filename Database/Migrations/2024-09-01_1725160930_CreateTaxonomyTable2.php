<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateTaxonomyTable2 implements SchemaMigration
{
  public function up(): array
  {
    return [
      "CREATE TABLE IF NOT EXISTS taxonomies (
        id INT PRIMARY KEY AUTO_INCREMENT,
        taxonomy_name VARCHAR(50),
        description TEXT
      )",
    ];
  }

  public function down(): array
  {
    return [
      "DROP TABLE taxonomies"
    ];
  }
}
