<?php

require_once __DIR__ . '/../vendor/autoload.php'; // require faker

$dbbktr = \debug_backtrace();
if (count($dbbktr) === 0) { // no incoming file to print
	print PHP_EOL . '====== Nothing to print...';
} else { // incoming file to print
	$methodPrefix = \basename($dbbktr[0]['file'], '.php'); // what to print (eg "food")
	$method = $methodPrefix . 'Name'; // method full name (eg "foodName")
	print PHP_EOL . '====== Printing random ' . $methodPrefix . '...';

	foreach (new DirectoryIterator(__DIR__ . '/../src/Provider/') as $item) { // FOREACH SUPPORTED LANGUAGE...
		if ($item->isDot()) continue; // skip "."

		$language = $item->getBasename(); // eg "it_IT"
		$localizedClassName = "\\FakerRestaurant\\Provider\\${language}\\Restaurant"; // eg "\FakerRestaurant\Provider\it_IT\Restaurant"
		/** @var \Faker\Generator */
		$faker = $fakersByLanguage[$language] = $fakersByLanguage[$language] ?? new \Faker\Generator(); // get faker generator from cache array OR init a new one
		if (!count($faker->getProviders())) { // add localized provider, if not already added
			$faker->addProvider(new $localizedClassName($faker));
		}
		print PHP_EOL . "[${language}] " . $faker->$method(); // ...PRINT WHAT WAS REQUESTED
	}
}
