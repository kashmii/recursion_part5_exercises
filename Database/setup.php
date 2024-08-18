<?php

use Database\MySQLWrapper;

$mysqli = new MySQLWrapper();

// Exercise1のセットアップファイルを指定
$sqlFiles = [
  __DIR__ . '/Exercise1/users-setup.sql',
  __DIR__ . '/Exercise1/posts-setup.sql',
  __DIR__ . '/Exercise1/comments-setup.sql',
  __DIR__ . '/Exercise1/post-likes-setup.sql',
  __DIR__ . '/Exercise1/comment-likes-setup.sql',
];

// 各SQLファイルを順番に実行
foreach ($sqlFiles as $file) {
  $query = file_get_contents($file);

  if ($query === false) {
    echo "Failed to read file: $file";
    continue;
  }

  if ($mysqli->query($query) === true) {
    echo "Successfully executed $file\n";
  } else {
    echo "Error executing $file: " . $mysqli->error . "\n";
  }
}

// Exercise2のセットアップファイルを指定
$ex2SqlFiles = [
  __DIR__ . '/Exercise2/tags-setup.sql',
  __DIR__ . '/Exercise2/post-tags-setup.sql',
  __DIR__ . '/Exercise2/categories-setup.sql',
  __DIR__ . '/Exercise2/user-settings-setup.sql',
  __DIR__ . '/Exercise2/user_add_subscription.sql',
  __DIR__ . '/Exercise2/post_add_category_id.sql',
];

foreach ($ex2SqlFiles as $file) {
  $query = file_get_contents($file);

  if ($query === false) {
    echo "Failed to read file: $file";
    continue;
  }

  if ($mysqli->multi_query($query) === true) {
    do {
      // ストア結果セット
      if ($result = $mysqli->store_result()) {
        $result->free();
      }
      // 次の結果セットがあるか確認
    } while ($mysqli->more_results() && $mysqli->next_result());

    echo "Successfully executed $file\n";
  } else {
    echo "Error executing $file: " . $mysqli->error . "\n";
  }
}


// 接続を閉じる
$mysqli->close();
