<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateCommentTable1 implements SchemaMigration
{
  public function up(): array
  {
    return [
      "CREATE TABLE comments (
        id INT PRIMARY KEY AUTO_INCREMENT,
        commentText VARCHAR(50),
        user_id BIGINT,
        post_id INT,
        created_at DATETIME,
        updated_at DATETIME,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
        FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE
      )"
    ];
  }

  public function down(): array
  {
    return [
      "DROP TABLE comments"
    ];
  }
}
