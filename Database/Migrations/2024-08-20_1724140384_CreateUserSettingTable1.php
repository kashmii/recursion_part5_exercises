<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateUserSettingTable1 implements SchemaMigration
{
  public function up(): array
  {
    return [
      "CREATE TABLE user_settings (
        entry_id INT PRIMARY KEY AUTO_INCREMENT,
        user_id BIGINT,
        meta_key VARCHAR(50),
        meta_value VARCHAR(50),
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
      )"
    ];
  }

  public function down(): array
  {
    return [
      "DROP TABLE user_settings"
    ];
  }
}
