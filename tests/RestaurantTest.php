<?php

use PHPUnit\Framework\TestCase;
use Faker\Factory;

final class RestaurantTest extends TestCase
{

    protected $folder;

    public function setUp(): void
    {
        $this->folder = $scanned_directory = array_diff(scandir('src/Provider'), array('..', '.'));
    }

    public function testCanBeFoodNameReturnStringInAllLanguages(): void
    {
        foreach ($this->folder as $folder) {
            $class = 'FakerRestaurant\Provider\\'.$folder.'\Restaurant';
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));
            $this->assertIsString($faker->foodName());
        }
    }

    public function testCanBeBeverageNameReturnStringInAllLanguages(): void
    {
        foreach ($this->folder as $folder) {
            $class = 'FakerRestaurant\Provider\\'.$folder.'\Restaurant';
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));
            $this->assertIsString($faker->beverageName());
        }
    }

    public function testCanBeDairyNameReturnStringInAllLanguages(): void
    {
        foreach ($this->folder as $folder) {
            $class = 'FakerRestaurant\Provider\\'.$folder.'\Restaurant';
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));
            $this->assertIsString($faker->dairyName());
        }
    }

    public function testCanBeVegetableNameReturnStringInAllLanguages(): void
    {
        foreach ($this->folder as $folder) {
            $class = 'FakerRestaurant\Provider\\'.$folder.'\Restaurant';
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));
            $this->assertIsString($faker->vegetableName());
        }
    }

    public function testCanBeFruitNameReturnStringInAllLanguages(): void
    {
        foreach ($this->folder as $folder) {
            $class = 'FakerRestaurant\Provider\\'.$folder.'\Restaurant';
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));
            $this->assertIsString($faker->fruitName());
        }
    }

    public function testCanBeMeatNameReturnStringInAllLanguages(): void
    {
        foreach ($this->folder as $folder) {
            $class = 'FakerRestaurant\Provider\\'.$folder.'\Restaurant';
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));
            $this->assertIsString($faker->meatName());
        }
    }

    public function testCanBeSauceNameReturnStringInAllLanguages(): void
    {
        foreach ($this->folder as $folder) {
            $class = 'FakerRestaurant\Provider\\'.$folder.'\Restaurant';
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));
            $this->assertIsString($faker->sauceName());
        }
    }

}