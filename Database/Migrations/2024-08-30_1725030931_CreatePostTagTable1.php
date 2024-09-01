<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreatePostTagTable1 implements SchemaMigration
{
  public function up(): array
  {
    return [
      "CREATE TABLE IF NOT EXISTS post_tags (
        post_id INT,
        tag_id INT,
        PRIMARY KEY (post_id, tag_id),
        FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE,
        FOREIGN KEY (tag_id) REFERENCES tags(id) ON DELETE CASCADE
      )"
    ];
  }

  public function down(): array
  {
    return [
      "DROP TABLE post_tags"
    ];
  }
}
