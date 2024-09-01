<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateSubscriptionTable2 implements SchemaMigration
{
  public function up(): array
  {
    return [
      "CREATE TABLE IF NOT EXISTS subscriptions (
        id INT PRIMARY KEY AUTO_INCREMENT,
        subscription VARCHAR(50),
        subscription_status VARCHAR(50),
        subscription_created_at TIMESTAMP,
        subscription_end_at TIMESTAMP,
        user_id BIGINT,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
      )"
    ];
  }

  public function down(): array
  {
    return [
      "DROP TABLE subscriptions"
    ];
  }
}