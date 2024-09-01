<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateTagTable1 implements SchemaMigration
{
  public function up(): array
  {
    return [
      "CREATE TABLE IF NOT EXISTS tags (
        id INT PRIMARY KEY AUTO_INCREMENT,
        tag_name VARCHAR(50)
      )"
    ];
  }

  public function down(): array
  {
    return [
      "DROP TABLE tags"
    ];
  }
}
