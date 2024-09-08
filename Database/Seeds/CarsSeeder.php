<?php

namespace Database\Seeds;

require_once 'vendor/autoload.php';

use Database\AbstractSeeder;
use Faker\Factory;

class CarsSeeder extends AbstractSeeder
{
  protected ?string $tableName = 'cars';
  protected array $tableColumns = [
    [
      'data_type' => 'string',
      'column_name' => 'make'
    ],
    [
      'data_type' => 'string',
      'column_name' => 'model'
    ],
    [
      'data_type' => 'int',
      'column_name' => 'year'
    ],
    [
      'data_type' => 'string',
      'column_name' => 'color'
    ],
    [
      'data_type' => 'float',
      'column_name' => 'price'
    ],
    [
      'data_type' => 'float',
      'column_name' => 'mileage'
    ],
    [
      'data_type' => 'string',
      'column_name' => 'transmission'
    ],
    [
      'data_type' => 'string',
      'column_name' => 'engine'
    ],
    [
      'data_type' => 'string',
      'column_name' => 'status'
    ]
  ];

  public function createRowData(): array
  {
    $faker = Factory::create();

    $cars = [];
    for ($i = 0; $i < 100; $i++) {
      $element = [
        $faker->company,
        $faker->word,
        (int)$faker->year,
        $faker->colorName,
        $faker->randomFloat(2, 1000, 100000),
        $faker->randomFloat(2, 0, 100000),
        $faker->word,
        $faker->word,
        $faker->word
      ];
      array_push($cars, $element);
    }

    return $cars;
  }
}
