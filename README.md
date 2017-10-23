FakerRestaurant
=======================

Food and Beverage names generate using fzaninotto/Faker


Installation
------------

Add the FakerRestaurant library to your `composer.json` file:

   composer require jzonta/faker-restaurant

Usage
-----

To  use this with [Faker](https://github.com/fzaninotto/Faker), you must add the `FakerRestaurant\FakerProvider` class to the Faker generator:

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \FakerRestaurant\Provider\en_US\FakerProvider($faker));

// Generator
$faker->foodName();      // A random Food Name
$faker->beverageName();  // A random Beverage Name
```

Language specific formatters
-----

en_US -> \FakerRestaurant\Provider\en_US\FakerProvider
pt_BR -> \FakerRestaurant\Provider\pt_BR\FakerProvider