<?php

namespace Commands\Programs;


use Commands\AbstractCommand;
use Database\MySQLWrapper;

class DbWipe extends AbstractCommand
{
  // 使用するコマンド名を設定
  protected static ?string $alias = 'db-wipe';

  // 引数を割り当て
  public static function getArguments(): array
  {
    return [];
  }

  public function execute(): int
  {
    // オプションがある場合にそのしょりをする

    // DBの削除処理
    $mysqli = new MySQLWrapper();
    $databaseName = $mysqli->getDatabaseName();
    $query = "DROP DATABASE $databaseName";

    if ($mysqli->query($query) === true) {
      $this->log("Database $databaseName deleted successfully.");
    } else {
      $this->log("Error deleting database: " . $mysqli->error);
      return 1;
    }

    $mysqli->close();

    $this->log('Deleting database.......' . $databaseName);
    return 0;
  }
}
