<?php

use Database\MySQLWrapper;

$mysqli = new MySQLWrapper();

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

// 接続を閉じる
$mysqli->close();
