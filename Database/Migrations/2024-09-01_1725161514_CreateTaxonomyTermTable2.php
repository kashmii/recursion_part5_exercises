<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateTaxonomyTermTable2 implements SchemaMigration
{
  public function up(): array
  {
    return [
      "CREATE TABLE IF NOT EXISTS taxonomy_terms (
        id INT PRIMARY KEY AUTO_INCREMENT,
        taxonomy_type_id INT,
        taxonomy_term_name VARCHAR(50),
        description TEXT,
        parent_taxonomy_term VARCHAR(50),
        FOREIGN KEY (taxonomy_type_id) REFERENCES taxonomies(id) ON DELETE CASCADE
      )"
    ];
  }

  public function down(): array
  {
    return [
      "DROP TABLE taxonomy_terms"
    ];
  }
}
