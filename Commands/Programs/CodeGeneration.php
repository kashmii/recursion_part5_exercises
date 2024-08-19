<?php

namespace Commands\Programs;

use Commands\AbstractCommand;

class CodeGeneration extends AbstractCommand
{
  // 使用するコマンド名を設定
  protected static ?string $alias = 'code-gen';
  // コマンドの値が必要かどうかを設定
  // 不要なのにtrueのままだとエラーが発生するため注意
  protected static bool $requiredCommandValue = true;

  // 引数を割り当て
  public static function getArguments(): array
  {
    return [];
  }

  public function execute(): int
  {
    $codeGenType = $this->getCommandValue();
    $this->log('Generating code for.......' . $codeGenType);
    return 0;
  }
}
