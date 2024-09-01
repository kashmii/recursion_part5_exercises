<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreatePostTaxonomyTable2 implements SchemaMigration
{
  public function up(): array
  {
    return [
      "CREATE TABLE IF NOT EXISTS post_taxonomies (
        id INT PRIMARY KEY AUTO_INCREMENT,
        post_id INT,
        taxonomy_id INT,
        FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE,
        FOREIGN KEY (taxonomy_id) REFERENCES taxonomies(id) ON DELETE CASCADE
      )"
    ];
  }

  public function down(): array
  {
    return [
      "DROP TABLE post_taxonomies"
    ];
  }
}