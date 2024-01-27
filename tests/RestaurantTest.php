<?php

use PHPUnit\Framework\TestCase;
use Faker\Factory;
use Faker\Generator;

final class RestaurantTest extends TestCase
{
    protected $folder;

    public function setUp(): void
    {
        $this->folder = $scanned_directory = array_diff(scandir('src/Provider'), array('..', '.'));
    }

    public function testCanBeFoodNameReturnStringInAllLanguages(): void
    {
        $this->testIterator(static function (Generator $faker) {
            return $faker->foodName();
        });
    }

    public function testCanBeBeverageNameReturnStringInAllLanguages(): void
    {
        $this->testIterator(static function (Generator $faker) {
            return $faker->beverageName();
        });
    }

    public function testCanBeDairyNameReturnStringInAllLanguages(): void
    {
        $this->testIterator(static function (Generator $faker) {
            return $faker->dairyName();
        });
    }

    public function testCanBeVegetableNameReturnStringInAllLanguages(): void
    {
        $this->testIterator(static function (Generator $faker) {
            return $faker->vegetableName();
        });
    }

    public function testCanBeFruitNameReturnStringInAllLanguages(): void
    {
        $this->testIterator(static function (Generator $faker) {
            return $faker->fruitName();
        });
    }

    public function testCanBeMeatNameReturnStringInAllLanguages(): void
    {
        $this->testIterator(static function (Generator $faker) {
            return $faker->meatName();
        });
    }

    public function testCanBeSauceNameReturnStringInAllLanguages(): void
    {
        $this->testIterator(static function (Generator $faker) {
            return $faker->sauceName();
        });
    }

    private function testIterator(callable $func)
    {
        foreach ($this->folder as $folder) {
            $class = 'FakerRestaurant\Provider\\'.$folder.'\Restaurant';
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));
            $this->assertIsString($func($faker));
        }
    }
}
