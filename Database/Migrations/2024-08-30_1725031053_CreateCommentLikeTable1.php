<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateCommentLikeTable1 implements SchemaMigration
{
  public function up(): array
  {
    return [
      "CREATE TABLE IF NOT EXISTS commentLikes (
        user_id BIGINT,
        comment_id INT,
        PRIMARY KEY (user_id, comment_id),
        FOREIGN KEY (user_id) REFERENCES users(id),
        FOREIGN KEY (comment_id) REFERENCES comments(id)
      )"
    ];
  }

  public function down(): array
  {
    return [
      "DROP TABLE commentLikes"
    ];
  }
}
