<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class DeleteTablesCategoryTagPostTag2 implements SchemaMigration
{
  public function up(): array
  {
    return [
      "DROP TABLE categories",
      "DROP TABLE post_tags",
      "DROP TABLE tags"
    ];
  }

  public function down(): array
  {
    return [
      "CREATE TABLE IF NOT EXISTS categories (
        id INT PRIMARY KEY AUTO_INCREMENT,
        category_name VARCHAR(50)
      )",
      "CREATE TABLE IF NOT EXISTS tags (
        id INT PRIMARY KEY AUTO_INCREMENT,
        tag_name VARCHAR(50)
      )",
      "CREATE TABLE IF NOT EXISTS post_tags (
        post_id INT,
        tag_id INT,
        PRIMARY KEY (post_id, tag_id),
        FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE,
        FOREIGN KEY (tag_id) REFERENCES tags(id) ON DELETE CASCADE
      )"
    ];
  }
}