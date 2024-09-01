<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class PostLikeTable1 implements SchemaMigration
{
  public function up(): array
  {
    return [
      "CREATE TABLE IF NOT EXISTS postLikes (
        user_id BIGINT,
        post_id INT,
        PRIMARY KEY (user_id, post_id),
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
        FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE
      )",
    ];
  }

  public function down(): array
  {
    return [
      "DROP TABLE postLikes"
    ];
  }
}
